<?php
/**
 * Created by PhpStorm.
 * User: xiemin
 * Date: 2015/11/10
 * Time: 10:53
 * Description: ����ĺ�������
 */

return array(
    /*
     * swoole�Ļ�������
     */
    'swoole' => array(
        'swoole_host' => '0.0.0.0',
        'swoole_port' => 10001,
        'worker_num' => 16, // ������
        'task_worker_num' => 16, //���������
        'max_request' => 100000,
        'log_file' => '/data/logs/commonSwoole/commonSwoole.log',
        'debug' => true,
        'gzip' => false,
        'progname' => 'commonswoole'
    ),

    /**
     *ҵ�����ã�key: ������ value��process ��ʾ����̹���ģʽ  http ��ʾhttp������Ӧ�Ĺ���ģʽ
     */
    'business' => array(
        'MongoTest' => array(
            'type' => 'process',
            'online' => false
        ),
        'RedisTest' => array(
            'type' => 'http',
            'online' => false
        ),
        'QueueTest' => array(
            'type' => 'process',
            'online' => false
        ),
        'ProcessTest' => array(
            'type' => 'process',
            'online' => true
        ),
        'HttpTest' => array(
            'type' => 'http',
            'online' => true
        ),
        'SShTest' => array(
            'type' => 'process',
            'online' => true
        ),
        'BloomTest'=>array(
            'type'=> 'http',
            'online'=> false
        ),
        'IPTest'=>array(
            'type'=>'http',
            'online'=>false
        ),
        'MessageQueueTest'=>array(
            'type'=>'process',
            'online'=>false
        ),
        'DataTransTest' => array(
            'type' => 'process',
            'online' => false
        ),
        'DiffUserTags' => array(
            'type' => 'process',
            'online' => false
        ),
        'MemcacheTest' => array(
            'type' => 'process',
            'online' => true
        )
    ),

    /**
     * ��ʾ���񽨹��� ���������ļ�Ŀ¼��Ϣ�����岻�� ���濼���Ż�
     */
    'workpath' => array(
        'LOGIC' => WORKROOT . '/logic/',
        'CONFIG' => WORKROOT . '/conf/',
        'LIB' => WORKROOT . '/lib/'
    )
);
