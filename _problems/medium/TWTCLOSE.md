---
{"category_name":"medium","problem_code":"TWTCLOSE","problem_name":"Closing the Tweets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"laycurse","date_added":"6-06-2012","tags":{"0":"array","1":"cakewalk","2":"cook23","3":"flying_ant"},"editorial_url":"http://discuss.codechef.com/problems/TWTCLOSE","time":{"view_start_date":1339959598,"submit_start_date":1339959598,"visible_start_date":1339959598,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">Little kids, Jack and Evan like playing their favorite game Glass-and-Stone. Today they want to play something new and came across Twitter on their father's laptop.

<p align="justify">They saw it for the first time but were already getting bored to see a bunch of sentences having at most 140 characters each. The only thing they liked to play with it is, closing and opening tweets.

<p align="justify">There are <b>N</b> tweets on the page and each tweet can be opened by clicking on it, to see some statistics related to that tweet. Initially all the tweets are closed. Clicking on an open tweet closes it and clicking on a closed tweet opens it. There is also a button to close all the open tweets. Given a sequence of <b>K</b> clicks by Jack, Evan has to guess the total number of open tweets just after each click. Please help Evan in this game.

<h3>Input</h3>
<p align="justify">First line contains two integers <b>N K</b>, the number of tweets (numbered 1 to <b>N</b>) and the number of clicks respectively (1 ≤ <b>N</b>, <b>K</b> ≤ 1000). Each of the following <b>K</b> lines has one of the following.<br/>
<ul>
<li>CLICK <i>X</i> , where <i>X</i> is the tweet number (1 ≤ <i>X</i> ≤ N)</li>
<li>CLOSEALL</li>
</ul>
<br/>
<h3>Output</h3>
<p align="justify">Output <b>K</b> lines, where the <i>i</i><sup>th</sup> line should contain the number of open tweets just after the <i>i</i><sup>th</sup> click.

<h3>Example</h3>

<pre>
<b>Input:</b>
3 6
CLICK 1
CLICK 2
CLICK 3
CLICK 2
CLOSEALL
CLICK 1

<b>Output:</b>
1
2
3
2
0
1
</pre>
<br/>
<b>Explanation:</b><br/><br/>
Let open[x] = 1 if the x<sup>th</sup> tweet is open and 0 if its closed.<br/>
Initially open[1..3] = { 0 , 0 , 0 }. Here is the state of open[1..3] after each click and corresponding count of open tweets.<br/><br/>
CLICK 1 : { 1, 0, 0 }, open count = 1<br/>
CLICK 2 : { 1, 1, 0 }, open count = 2<br/>
CLICK 3 : { 1, 1, 1 }, open count = 3<br/>
CLICK 2 : { 1, 0, 1 }, open count = 2<br/>
CLOSEALL : { 0, 0, 0 }, open count = 0<br/>
CLICK 1 : { 1, 0, 0 }, open count = 1<br/>
