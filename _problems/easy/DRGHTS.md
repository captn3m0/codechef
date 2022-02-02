---
{"category_name":"easy","problem_code":"DRGHTS","problem_name":"Draughts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"gerald","date_added":"15-06-2013","tags":{"0":"easy","1":"feb14","2":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/DRGHTS","time":{"view_start_date":1392629400,"submit_start_date":1392629400,"visible_start_date":1392629400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/mandarin/DRGHTS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB14/russian/DRGHTS.pdf">Russian</a>.</h3>
<p>Furik and Rubik have come to the sanatorium, which consists of <b>N</b> rooms and <b>M</b> passageways. Each passageway connects two rooms, and there is at most one way to move between each pair of rooms. Some rooms have opened windows. There is a draught between two different rooms if both rooms have opened windows, and are connected with each other by some way.</p>
<p>Furik is interested in one question: what is the number of pairs of rooms, which have a draught between them. Rubik wants to know what is the number of the rooms, which have at least one draught passing through the room.</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>N</b> and <b>M</b>. The next line contains <b>N</b> integers, where the <b>i</b><sup>th</sup> number is equal to <b>1</b>, if the window in the room number <b>i</b> is opened, otherwise <b>0</b>. Then the next <b>M</b> lines contain pairs of integers, where the <b>i</b><sup>th</sup> pair denotes the numbers of the connected rooms by <b>i</b><sup>th</sup> passageway. Consider that the rooms are numerated by different integers from <b>1</b> to <b>N</b>.</p>
<h3>Output</h3>
<p>In a single line print two numbers, denoting the answers to Furik and Rubik questions.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50000 (5 × 10<sup>4</sup>)</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>N − 1</b></li>
<li>There is at most one way to move between each pair of rooms, that is, the given graph is a forest</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
6 5
1 1 1 1 1 0
1 2
1 6
1 5
2 4
4 3

<b>Output:</b>
10 5

<b>Input:</b>
2 1
1 0
1 2

<b>Output:</b>
0 0
</pre>