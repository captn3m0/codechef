---
{"category_name":"easy","problem_code":"CHMOD","problem_name":"Chef and Segments","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"white_king","date_added":"11-05-2013","tags":{"0":"aug13","1":"easy","2":"exponentiation","3":"furko","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHMOD","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef likes toys. His favourite toy is an array of length <b>N</b>. This array contains only integers. He plays with this array every day. His favourite game with this array is <b>Segment Multiplication</b>. In this game, the second player tells the <b>left</b> and <b>right</b> side of a segment and some <b>modulo</b>. The first player should find <b>the multiplication of all the integers in this segment of the array modulo the given modulus</b>. Chef is playing this game. Of course, he is the first player and wants to win all the games. To win any game he should write the correct answer for each segment. Although Chef is very clever, he has no time to play games. Hence he asks you to help him. Write the program that solves this problem.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of elements in the given array. Next line contains <b>N</b> integers <b>Ai</b> separated with spaces. The third line contains the number of games <b>T</b>. Each of the next T lines contain 3 integers <b>Li, Ri and Mi</b>, the left side of the segment, the right side of segment and the modulo.</p>
<h3>Output</h3>
<p>For each game, output a single line containing the answer for the respective segment.</p>
<h3>Constrdaints</h3>
<ul>
<li><b>1 ≤ N ≤ 100,000</b></li>
<li><b>1 ≤ Ai ≤ 100</b></li>
<li><b>1 ≤ T ≤ 100,000</b></li>
<li><b>1 ≤ Li ≤ Ri ≤ N</b></li>
<li><b>1 ≤ Mi ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1 2 3 4 5
4
1 2 3
2 3 4
1 1 1
1 5 1000000000

<b>Output:</b>
2
2
0
120

</pre>