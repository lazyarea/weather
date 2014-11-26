package Weather::Sample;

use strict;
use warnings;
use LWP::UserAgent;
use HTML::TreeBuilder;

# urlを指定する
my $host   = 'http://weather.yahoo.co.jp';
my $path   = '/weather/search/?p=';
my $postcd = '160-0004';
my $url = $host.$path.$postcd;


# IE8のフリをする
my $user_agent = "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)";

# LWPを使ってサイトにアクセスし、HTMLの内容を取得する
my $ua = LWP::UserAgent->new('agent' => $user_agent);
my $res = $ua->get($url);
my $content = $res->content;

# HTML::TreeBuilderで解析する
my $tree = HTML::TreeBuilder->new;
$tree->parse($content);

# DOM操作してトピックの部分だけ抜き出す。
# <div id='topicsfb'><ul><li>....の部分を抽出する

my @items =  $tree->look_down('class', 'yjw_table3')->find('td');
print $_->as_text."\n" for @items;

1;

