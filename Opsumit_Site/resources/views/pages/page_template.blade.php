@extends('app')

@section('title')
    <title>{{$pageTitle}}</title>
@stop


@section('content')
<div class="content">
    <div class="title">{{$pageTitle}}</div>
</div>

<script>

    document.write("Top of page");

    // var linkedFrom = "";

    var linkedFrom = "www.bing.com";

    var searchEnginesPattern = /(google|yahoo|bing|ask|aol)/g;
    var searchEnginesResult = linkedFrom.match(searchEnginesPattern);
    var isSearchEngine = searchEnginesResult.length > 0 ? true : false;

    var isBannerLink = linkedFrom.indexOf('email_id') != -1 ? true : false;
    var isEmailLink = linkedFrom.indexOf('banner_id') != -1 ? true : false;

    var resultString = "you came from search engine ";

    if( isSearchEngine ) {
        resultString += "you came from search engine " + searchEnginesResult[0];
    } else if(isBannerLink ) {

    } else if( isEmailLink )


    document.write("Is search engine: " + isSearchEngine + " search type: " + searchEnginesResult[0] ) ;



</script>


@stop




