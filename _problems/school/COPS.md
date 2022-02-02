---
{"category_name":"school","problem_code":"COPS","problem_name":"Cops and the Thief Devu","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"adurysk","date_added":"20-05-2015","tags":{"0":"cakewalk","1":"cook60","2":"devuy11"},"editorial_url":"http://discuss.codechef.com/problems/COPS","time":{"view_start_date":1437330600,"submit_start_date":1437330600,"visible_start_date":1437330600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/mandarin/COPS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/russian/COPS.pdf">Russian</a> as well.</h3>
<p>There are 100 houses located on a <b>straight line</b>. The first house is numbered 1 and the last one is numbered 100. Some <b>M</b> houses out of these 100 are occupied by cops.</p>
<p>Thief Devu has just stolen PeePee's bag and is looking for a house to hide in.</p>
<p>PeePee uses fast 4G Internet and sends the message to all the cops that a thief named Devu has just stolen her bag and ran into some house.</p>
<p>Devu knows that the cops run at a maximum speed of <b>x</b> houses per minute in a straight line and they will search for a maximum of <b>y</b> minutes. Devu wants to know how many houses are safe for him to escape from the cops. Help him in getting this information.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases to follow.</p>
<p>First line of each test case contains 3 space separated integers: <b>M</b>, <b>x</b> and <b>y</b>.</p>
<p>For each test case, the second line contains <b>M</b> space separated integers which represent the house numbers where the cops are residing.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of houses which are safe to hide from cops.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>4</sup></li>
<li>1 ≤ <b>x, y, M</b> ≤ 10</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
4 7 8
12 52 56 8
2 10 2
21 75
2 5 8
10 51

<b>Output:</b>
0
18
9
</pre><h3>Explanation</h3>
<p><b>Example 1 :</b> Cops in house 12 can cover houses 1 to 68, and cops in house 52 can cover the rest of the houses. So, there is no safe house.</p>
<p><b>Example 2 :</b> Cops in house 21 can cover houses 1 to 41, and cops in house 75 can cover houses 55 to 95, leaving houses numbered 42 to 54, and 96 to 100 safe. So, in total 18 houses are safe.</p>
