<?php


use Phinx\Migration\AbstractMigration;

class AdditionalFieldsForTalk extends AbstractMigration
{
    public function change()
    {
        $this->table('talks')
             ->addColumn('key_takeaway', 'text')
             ->addColumn('video_pitch_url', 'string')
             ->addColumn('given_before', 'boolean')
             ->addColumn('place_given_before', 'text')
             ->addColumn('videos_urls', 'text')
             ->addColumn('slides_urls', 'text')
             ->addColumn('other_events', 'text')
             ->update();
    }
}
