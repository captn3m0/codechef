---
{"category_name":"challenge","problem_code":"MX","problem_name":"Sorting device","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"TEXT","43":"SCM chicken","44":"CLOJ","45":"COB","46":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"15-01-2010","tags":{"0":"admin"},"time":{"view_start_date":1265893919,"submit_start_date":1265893919,"visible_start_date":1265893919,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You work for a large company, and your job is to design sorting devices. Devices are built from:</p>
<ul>
<li><var>n</var> inputs,</li>
<li><var>n</var> outputs,</li>
<li>gates which have two inputs and send to output the minimum ("min gates") or maximum ("max gates") of the two numbers given at their input,</li>
<li>connecting wires.</li>
</ul>
<p>You are competing in a bid for a Bytelandian Ministry of Information contract to design the smallest possible device (in terms of the number of gates) which sorts any input. Each device will go through a rigorous test process on a number of data sets. However, through some Good Friends in High Places you have managed to acquire some additional information concerning the exact data sets (permutations) your device will be tested on. Make use of this, and of course your superior programming skills, to win the bid!</p>
<h3>Input</h3>
<p>First, two numbers, 2≤<var>n</var>≤20, 1≤<var>k</var>≤1000, the number of inputs and the number of different permutations for which your device will be tested. The next <var>k</var> lines contain permutations of the numbers <var>1 .. n</var>.</p>
<h3>Output</h3>
<p>First, output <var>p</var>, the number of gates in your device (0≤<var>p</var>≤10<sup>6</sup>). The next <var>p</var> lines should contain definitions of the gates used, in the form of a pair of integers, <var>x<sub>i</sub>,y<sub>i</sub></var>, and exactly one of the strings "min" or "max". To be able to use the output of a gate as the input of a subsequent gate, we use the following convention. First of all, the range for inputs <var>x<sub>i</sub></var> and <var>y<sub>i</sub></var> is as follows: 1 ≤ <var>x<sub>i</sub>,y<sub>i</sub></var> &lt; <var>n+p</var>. The output of the <var>i</var>-th gate is assumed to be input <var>n+i</var>.
<p>
Finally, a sequence of exactly <var>n</var> integers in the range <var>1</var>..<var>n+p</var> should follow, describing which of the "inputs" should be hard-wired to successive outputs of the device.</p>
<h3>Scoring</h3>
<p>If your program does not produce a sorting machine which works for every input (sorting it in ascending order), it will be deemed incorrect. Otherwise, you will score <var>p</var> penalty points for each test case solved.</p>
<h3>Example</h3>
<pre><strong>Input:</strong><br />3 2<br />1 2 3<br />1 3 2<br /><br /><strong>Output:</strong><br />2<br />2 3 min<br />2 3 max<br />1 4 5<br/><br/><strong>Score:</strong><br/> 0.5</pre>