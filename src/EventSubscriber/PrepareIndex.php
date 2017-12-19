<?php

namespace Drupal\search_api_elasticsearch_attachments\EventSubscriber;

use Drupal\elasticsearch_connector\Event\PrepareIndexEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * {@inheritdoc}
 */
class PrepareIndex implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[PrepareIndexEvent::PREPARE_INDEX] = 'prepareIndex';
    return $events;
  }

  /**
   * Method to prepare index.
   *
   * @param Drupal\elasticsearch_connector\Event\PrepareIndexEvent $event
   *   The PrepareIndexEvent event.
   */
  public function prepareIndex(PrepareIndexEvent $event) {
    $indexConfig = $event->getIndexConfig();
//ksm($indexConfig);
    //$indexConfig['body']['settings']['analysis'] = [];
    //$indexConfig['pipeline'] = 'attachment';
    //$event->setIndexConfig($indexConfig);
  }

}