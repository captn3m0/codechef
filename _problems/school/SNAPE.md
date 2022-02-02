---
{"category_name":"school","problem_code":"SNAPE","problem_name":"Snape and Ladder","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"gerald","date_added":"24-01-2013","tags":{"0":"cakewalk","1":"cook45","2":"geometry","3":"implementation","4":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/SNAPE","time":{"view_start_date":1398018600,"submit_start_date":1398018600,"visible_start_date":1398018600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/SNAPE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/SNAPE.pdf">Russian</a> as well.</h3>
<p>

<p>Professor Snape has lots of potions. Bottles containing all types of potions are stacked on shelves which cover the entire wall from floor to ceiling. Professor Snape has broken his bones several times while climbing the top shelf for retrieving a potion. He decided to get a ladder for him. But he has no time to visit Diagon Alley. So he instructed Ron Weasley to make a ladder for him. Professor Snape specifically wants a step ladder which looks like an inverted 'V' from side view.<br/><img src="http://www.codechef.com/download/XxAtE7i.png"/></p>
<p>Professor just mentioned two things before vanishing-
<ul><li><b>B</b> - separation between left side (LS) and right side (RS) on the ground</li>
<li><b>LS</b> - the length of left side</li></ul></p>
<p>What should be the length of <b>RS</b>? At one extreme <b>LS</b> can be vertical and at other <b>RS</b> can be vertical. Ron is angry and confused. Since Harry is busy battling Voldemort, its your duty to help him find the minimum and maximum length of <b>RS</b>.</p>

<h3>Input</h3>
<p>First line contains single integer <b>T</b>, the number of test cases. Then <b>T</b> lines follow each containing 2 integers - <b>B</b> and <b>LS</b>.</p>

<h3>Output</h3>
<p>Output <b>T</b> lines, each containing minimum value of <b>RS</b> and maximum value of <b>RS</b>, separated by space. The answer (<b>RS</b>) will be considered correct if it has relative and absolute error less than 10<sup>-2</sup>.</p>

<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 1000<br/>1 ≤ <b>B</b> &lt; <b>LS</b> ≤ 1000</p> 

<h3>Example</h3>

<pre>
<b>Input:</b>
3
4 5
10 12
10 20

<b>Output:</b>
3.0 6.40312
6.63325 15.6205
17.3205 22.3607
</pre>