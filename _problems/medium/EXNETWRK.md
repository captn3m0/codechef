---
{"category_name":"medium","problem_code":"EXNETWRK","problem_name":"Computer Network","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"pavel1996","date_added":"29-10-2015","tags":{"0":"construction","1":"easy","2":"ltime31","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/EXNETWRK","time":{"view_start_date":1451205000,"submit_start_date":1451205000,"visible_start_date":1451205000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/mandarin/EXNETWRK.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/russian/EXNETWRK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME31/vietnamese/EXNETWRK.pdf">Vietnamese</a> as well.</h3>

<p>You have been appointed as the designer for your school's computer network.</p>

<p>In total, there are <b>N</b> computers in the class, and <b>M</b> computer-to-computer connections need to be made. Also, there are three mandatory conditions the design should fulfill.</p>

<p>The first requirement is that any computer in the network should be able to communicate with any other computer through the connections, possibly, through some other computers.</p>

<p>Network attacks are possible, so the second requirement is that even if any one computer from the network gets disabled so that the rest of the computers are unable to communicate with it, the rest of the computers can still communicate with each other. In other words, the first requirement still holds for any subset of <b>(N-1)</b> computers.</p>

<p>The third requirement is that there shouldn't be any irrelevant connections in the network. We will call a connection <b>irrelevant</b> if and only if after its' removal, the above two requirements are still held.</p>

<p>Given <b>N, M</b>, please build a network with <b>N</b> computers and <b>M</b> connections, or state that it is impossible.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first and only line of each test case contains a pair of space-separated integers <b>N</b> and <b>M</b> denoting the number of computers and the number of connections.</p>

<h3>Output</h3>
<p>Output <b>T</b> blocks.</p>
<p>If it is impossible to construct a network with the given parameters for the corresponding test case, output just <b>-1 -1</b>. Otherwise, output <b>M</b> lines, each of which contains a space-separated pairs of integers denoting the IDs of the computers that should be connected. Note that multiple connections between any pair of computers and connections connecting a computer to itself are implicitly not allowed due to the third requirement.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N * (N - 1) / 2</b></li>
<li><b>1</b> ≤ Sum of all <b>N</b> ≤ <b>1000</b></li>
<li>Subtask 1 (21 point): <b>1</b> ≤ <b>N</b> ≤ <b>4</b></li>
<li>Subtask 2 (79 points): <b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
10 1
5 5</tt>

<b>Output:</b>
<tt>-1 -1
1 2
2 3
3 4
4 5
5 1</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There are not enough connections even to satisfy the first requirement.</p>
<p><b>Example case 2.</b> The obtained network satisfies all the requirements.</p>
