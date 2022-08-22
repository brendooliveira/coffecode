<?php

namespace Source\Support\Telegram;

/**
 * @author Brendo O 0 Santos <brendo.dev@outlook.com>
 * @package Source\Support\Telegram
 */
class Bot
{

    protected $curl;
    const URL_PREFIX = 'https://api.telegram.org/bot';
    private $proxySettings = [];
    protected $token;
    protected $callback;


    public function __construct($token)
    {
        $this->curl = curl_init();
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return self::URL_PREFIX.$this->token;
    }

    public function sendMessage($chatId, $text, $parseMode = null, $disablePreview = false, $replyToMessageId = null, $replyMarkup = null, $disableNotification = false) 
    {
        $this->call('sendMessage', [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => $parseMode,
            'disable_web_page_preview' => $disablePreview,
            'reply_to_message_id' => (int)$replyToMessageId,
            'reply_markup' => is_null($replyMarkup) ? $replyMarkup : $replyMarkup,
            'disable_notification' => (bool)$disableNotification,
        ]);

        return $this->callback;
    }

    /**
     * Call method
     *
     * @param string $method
     * @param array|null $data
     *
     * @return mixed
     */
    public function call($method, array $data = null)
    {
        $options = $this->proxySettings + [
            CURLOPT_URL => $this->getUrl().'/'.$method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => null,
            CURLOPT_POSTFIELDS => null,
            CURLOPT_TIMEOUT => 5,
        ];

        if ($data) {
            $options[CURLOPT_POST] = true;
            $options[CURLOPT_POSTFIELDS] = $data;
        }

        return $this->executeCurl($options);
    }

    protected function executeCurl(array $options)
    {
        curl_setopt_array($this->curl, $options);

        $this->callback = curl_exec($this->curl);
        curl_close($this->curl);
        return $this->callback;
    }

}