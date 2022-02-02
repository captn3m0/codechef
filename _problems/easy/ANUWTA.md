---
{"category_name":"easy","problem_code":"ANUWTA","problem_name":"Walk on the Axis","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"kostya_by","date_added":"30-09-2014","tags":{"0":"ad","1":"anudeep2011","2":"cakewalk","3":"cook51"},"editorial_url":"http://discuss.codechef.com/problems/ANUWTA","time":{"view_start_date":1413744000,"submit_start_date":1413744000,"visible_start_date":1413744000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUWTA.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUWTA.pdf">Russian</a> as well.</h3>
<p>
There are <b>N+1</b> lights. Lights are placed at <b> (0, 0), (1, 0), (2, 0) ... (<b>N</b>, 0).</b> Initially all the lights are on. You want to turn off all of them one after one.  You want to follow a special pattern in turning off the lights.
</p>
<p>
You will start at <b>(0, 0)</b>. First, you walk to the right most light that is on, turn it off. Then you walk to the left most light that is on, turn it off. Then again to the right most light that is on and so on. You will stop after turning off all lights. You want to know how much distance you walked in the process. Note that distance between <b>(a,0)</b> and <b>(b,0)</b> is <b>|a-b|</b>.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each test case has a single integer <b>N</b> on separate line.
</p>
<h3>Output</h3>
<p>For each test case, output the distance you walked.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
2
1
2

<b>Output</b>
2
5
</pre><h3>Explanation</h3>
<p><b>Testcase #2</b><br />
You are initially at (0, 0)<br />
Right most on-light is (2, 0). Distance = 2.<br />
Now you are at (2, 0).<br />
Left most on-light is (0, 0). Distance = 2.<br />
Now you are at (0, 0)<br />
Right most on-light is (1, 0). Distance = 1.<br />
Now you are at (1, 0) and all lights are turned off.<br />
Total distance walked = 5.
</p>
