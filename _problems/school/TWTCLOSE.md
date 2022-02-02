---
{"category_name":"school","problem_code":"TWTCLOSE","problem_name":"Closing the Tweets","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/n7Rq9KrCmms","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":0.393617,"source_sizelimit":50000,"problem_author":"anil_adm","problem_tester":"laycurse","date_added":"6-06-2012","tags":{"0":"anil_adm","1":"array","2":"cakewalk","3":"cook23"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TWTCLOSE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TWTCLOSE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p align="justify">Little kids, Jack and Evan like playing their favorite game Glass-and-Stone. Today they want to play something new and came across Twitter on their father's laptop.

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

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>