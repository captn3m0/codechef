---
{"category_name":"easy","problem_code":"ANUARM","problem_name":"The Army","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"kostya_by","date_added":"30-09-2014","tags":{"0":"anudeep2011","1":"cook51","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ANUARM","time":{"view_start_date":1413744000,"submit_start_date":1413744000,"visible_start_date":1413744000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUARM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUARM.pdf">Russian</a> as well.</h3>
<p>
<b>N</b> Soldiers are lined up for a memory test. They are numbered from 0 to <b>N-1</b> from left to right.
</p>
<p>
In the test, there are <b>M</b> rounds. In each round, Captain selects one position. Soldier at that position will be numbered 0. All the soldiers to the right of selected position will be numbered one greater than the soldier to his left. All the soldiers to the left of selected position will be numbered one greater than the soldier to his right. <br />
eg. if <b>N</b> = 6 and selected position is 3, then the numbering will be [3, 2, 1, 0, 1, 2].
</p>
<p>
 After <b>M</b> rounds, Captain asked each soldier to shout out the greatest number he was assigned during the <b>M</b> rounds. In order to check the correctness, Captain asked you to produce the correct values for each soldier (That is the correct value each soldier should shout out).
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
First line of each test case contains two integers, <b>N</b> and <b>M</b>.<br />
Second line of each test case contains <b>M</b> integers, the positions selected by Captain, in that order.</p>
<h3>Output</h3>
<p>For each test case, output one line with <b>N</b> space separated integers.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^4</b>
</li><li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>M</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>Sum of N over all testcases</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>Sum of M over all testcases</b> ≤ <b>10^5</b>
</li><li><b>0</b> ≤ <b>Positions selected by captain</b> ≤ <b>N-1</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
2
4 1
1
6 2
2 3

<b>Output</b>
1 0 1 2
3 2 1 1 2 3

</pre>