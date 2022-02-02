---
{"category_name":"school","problem_code":"VCS","problem_name":"Version Control System","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"stzgd","date_added":"16-03-2015","tags":{"0":"cakewalk","1":"cook57","2":"kostya_by","3":"sets"},"editorial_url":"http://discuss.codechef.com/problems/VCS","time":{"view_start_date":1429470000,"submit_start_date":1429470000,"visible_start_date":1429470000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/mandarin/VCS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/russian/VCS.pdf">Russian</a> as well.</h3>
<p><meta charset="utf8" /></p>
<p>
	A <i>version control system</i>(VCS) is a repository of files, often the files for the source code of computer programs, with monitored access. Every change made to the source is tracked, along with who made the change, why they made it, and references to problems fixed, or enhancements introduced, by the change.
</p>
<p>
	Version control systems are essential for any form of distributed, collaborative development. Whether it is the history of a wiki page or large software development project, the ability to track each change as it was made, and to reverse changes when necessary can make all the difference between a well managed and controlled process and an uncontrolled ‘first come, first served’ system. It can also serve as a mechanism for due diligence for software projects.
</p>
<p>
	In this problem we'll consider a simplified model of a development project. Let's suppose, that there are <b>N</b> source files in the project. All the source files are distinct and numbered from 1 to <b>N</b>.
</p>
<p>
	A VCS, that is used for maintaining the project, contains two sequences of source files. The first sequence contains the source files, that are ignored by the VCS. If a source file is not in the first sequence, then it's considered to be unignored. The second sequence contains the source files, that are tracked by the VCS. If a source file is not in the second sequence, then it's considered to be untracked. A source file can either be or not be in any of these two sequences.
</p>
<p>
	Your task is to calculate two values: the number of source files of the project, that are both tracked and ignored, and the number of source files of the project, that are both untracked and unignored.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of the test case description contains three integers <b>N</b>, <b>M</b> and <b>K</b> denoting the number of source files in the project, the number of ignored source files and the number of tracked source files.</p>
<p>The second line contains <b>M</b> distinct integers denoting the sequence <b>A</b> of ignored source files. The sequence is strictly increasing.</p>
<p>The third line contains <b>K</b> distinct integers denoting the sequence <b>B</b> of tracked source files. The sequence is strictly increasing.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two integers: the number of the source files, that are both tracked and ignored, and the number of the source files, that are both untracked and unignored.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>M</b>, <b>K</b> ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>A<sub>1</sub></b> &lt; <b>A<sub>2</sub></b> &lt; ... &lt; <b>A<sub>M</sub></b> ≤ <b>N</b></li>
<li>1 ≤ <b>B<sub>1</sub></b> &lt; <b>B<sub>2</sub></b> &lt; ... &lt; <b>B<sub>K</sub></b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
7 4 6
1 4 6 7
1 2 3 4 6 7
4 2 2
1 4
3 4

<b>Output:</b>
4 1
1 1

</pre><h3>Explanation</h3>
<p>
	In the first test case, the source files {1, 4, 6, 7} are both tracked and ignored, the source file {5} is both untracked and unignored.
</p>
<p>
	In the second test case, the source file {4} is both tracked and ignored, the source file {2} is both untracked and unignored.
</p>
