<?php
	//use	LINE;
		use LINE\LINEBot;
		use	LINE\LINEBot\Constant;
			use	LINE\LINEBot\Constant\ActionType;
			use	LINE\LINEBot\Constant\EventSourceType;
			use	LINE\LINEBot\Constant\HTTPHeader;
			use	LINE\LINEBot\Constant\MessageType;
			use	LINE\LINEBot\Constant\Media;
			use	LINE\LINEBot\Constant\TemplateType;
		use LINE\LINEBot\Event;
			use	LINE\LINEBot\Event\BaseEvent;
			use	LINE\LINEBot\Event\BeaconDetectionEvent;
			use	LINE\LINEBot\Event\FollowEvent;
			use	LINE\LINEBot\Event\JoinEvent;
			use	LINE\LINEBot\Event\LeaveEvent;
			use	LINE\LINEBot\Event\MessageEvent;
				use	LINE\LINEBot\Event\MessageEvent\AudioMessage;
				use	LINE\LINEBot\Event\MessageEvent\FileMessage;
				use	LINE\LINEBot\Event\MessageEvent\Imagemap;
				use	LINE\LINEBot\Event\MessageEvent\ImageMessage;
				use	LINE\LINEBot\Event\MessageEvent\LocationMessage;
				use	LINE\LINEBot\Event\MessageEvent\StickerMessage;
				use	LINE\LINEBot\Event\MessageEvent\TemplateBuilder;
				use	LINE\LINEBot\Event\MessageEvent\TextMessage;
				use	LINE\LINEBot\Event\MessageEvent\UnknownMessage;
				use	LINE\LINEBot\Event\MessageEvent\VideoMessage;
			use	LINE\LINEBot\Event\Parser;
				use	LINE\LINEBot\Event\Parser\EventRequestParser;
			use	LINE\LINEBot\Event\PostbackEvent;
			use	LINE\LINEBot\Event\UnfollowEvent;
			use	LINE\LINEBot\Event\UnknownEvent;
		use	LINE\LINEBot\Exception;
			use	LINE\LINEBot\Exception\CurlExecutionException;
			use	LINE\LINEBot\Exception\InvalidEventRequestException;
			use	LINE\LINEBot\Exception\InvalidEventSourceException;
			use	LINE\LINEBot\Exception\InvalidSignatureException;
		use	LINE\LINEBot\HTTPClient;
			use	LINE\LINEBot\HTTPClient\Curl;
			use	LINE\LINEBot\HTTPClient\CurlHTTPClient;
		use	LINE\LINEBot\ImagemapActionBuilder;
			use	LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
			use	LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder;
			use	LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
		use	LINE\LINEBot\MessageBuilder;
			use	LINE\LINEBot\MessageBuilder\AudioMessageBuilder;
			//use	LINE\LINEBot\MessageBuilder\Imagemap;
				use	LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
			use	LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
			use	LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
			use	LINE\LINEBot\MessageBuilder\LocationMessageBuilder;
			use	LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
			use	LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
			//use	LINE\LINEBot\MessageBuilder\TemplateBuilder;
				use	LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder;
				use	LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
				use	LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;
				use	LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder;
				use	LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselComlumnTemplateBuilder;
				use	LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
			use	LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
			use	LINE\LINEBot\MessageBuilder\TextMessageBuilder;
			use	LINE\LINEBot\MessageBuilder\VideoMessageBuilder;
		use	LINE\LINEBot\Response;
		use	LINE\LINEBot\SignatureValidator;
		use	LINE\LINEBot\TemplateActionBuilder;
			use	LINE\LINEBot\TemplateActionBuilder\DatetimePickerTemplateActionBuilder;
			use	LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
			use	LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder;
			use	LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
?>