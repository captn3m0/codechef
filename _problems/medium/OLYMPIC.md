---
{"category_name":"medium","problem_code":"OLYMPIC","problem_name":"Gifts at Olympics","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"laycurse","date_added":"8-06-2012","tags":{"0":"cook23","1":"easy","2":"flying_ant"},"editorial_url":"http://discuss.codechef.com/problems/OLYMPIC","time":{"view_start_date":1339959726,"submit_start_date":1339959726,"visible_start_date":1339959300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">
The Olympic Games, world's foremost sports competition, 
will be hosted by London next month. 
Tens of thousands of participants from over 200 nations will be participating this year. 
Each game has only 3 winners, so the organizers have decided to give special chocolate gift pack to each participant.

<p align="justify">
A huge number of chocolates have just arrived from <b>N</b> different villages, numbered 1 to <b>N</b>. 
The organizers have decided the number of chocolates to be given to each participant. 
This is given in <b>count</b>, where <b>count</b>[<i>i</i>] is the number of chocolates from <i>i</i><sup>th</sup> village, 
to be placed in each gift pack. 
Now they need to order boxes for these chocolates. 
A box of size <b>S</b> can store at most <b>S</b> chocolates. 
A gift pack is made as follows.

<p align="justify">
Each of the <b>N</b> villages is assigned a unique colored box 
and chocolates from a village are placed only in boxes assigned to it. 
The organizers always want to minimize the number of boxes in each gift pack. 
E.g., for given <b>N</b> = 3 villages and <b>count</b> = {3, 12, 7}, suppose colors assigned are <i>A</i>, <i>B</i>, <i>C</i>. 
If size of each box is <b>S</b> = 4, then we need 1 box of color A, 3 boxes of color B and 2 boxes of color C. 
All the boxes for a gift pack are then packed in a row using transparent wrapper. 
So in the above example, a gift pack can be "<i>ABBBCC</i>" or "<i>ABCBCB</i>" etc.

<p align="justify">
To make everyone feel special, no two participants are given same gift packs. 
Two gift packs are different if and only if they have the different order of colored boxes, even in reverse order. 
For example "<i>ABBBCC</i>" is same as "<i>ABBBCC</i>" and also same as "<i>CCBBBA</i>". 
Given <b>Q</b> queries, each specifying the size of a box <b>S</b>, 
find the total number of different gift packs possible if we use boxes of size <b>S</b> each. 
Output the result modulo 1000000007 (10<sup>9</sup>+7).

<h3>Input</h3>
<p align="justify">The first line has an integer <b>N</b>. The second line has the array <b>count</b>, <b>N</b> space separated integers. 
The next line has integer <b>Q</b>, followed by <b>Q</b> lines, each having an integer size <b>S</b>.<br/><br/>
1 &le; <b>N</b>, <b>count</b>[<i>i</i>], <b>Q</b> &le; 100000 (10<sup>5</sup>)<br/>
1 &le; sum of all <b>count</b>[<i>i</i>] &le; 100000 (10<sup>5</sup>)<br/>
1 &le; <b>S</b> &le; 1000000000 (10<sup>9</sup>)<br/><br/>

<h3>Output</h3>
<p align="justify">Output <b>Q</b> lines, one for each query, 
the total number of different gift packs possible, using boxes of size <b>S</b>, specified in that query modulo 1000000007 (10<sup>9</sup>+7).

<h3>Example</h3>

<pre>
<b>Input:</b>
3
5 3 12
4
4
5
2
12

<b>Output:</b>
30
10
2320
3
</pre>
<br/><br/>
<b>Explanation:</b><br/>
In the last query, size of each box <b>S</b> = 12.<br/><br/>
Suppose the colors assigned to the 3 villages are <i>A</i>, <i>B</i>, <i>C</i> respectively,
we need 1 box of each color. <br/><br/>
Only 3 different gift packs can be made. They are "<i>ABC</i>", "<i>ACB</i>", "<i>BAC</i>".<br/>
