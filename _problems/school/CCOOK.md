---
{"category_name":"school","problem_code":"CCOOK","problem_name":"Chef and Cook-Off","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"wwwwodddd","date_added":"3-02-2018","tags":{"0":"cakewalk","1":"conditions","2":"cook91","3":"loops","4":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CCOOK","time":{"view_start_date":1518978600,"submit_start_date":1518978600,"visible_start_date":1518978600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/mandarin/CCOOK.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/russian/CCOOK.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/vietnamese/CCOOK.pdf">Vietnamese</a> as well.</h3>

<p>Chef has obtained the results of a past Cook-Off. He wants to estimate the skill level of each contestant. The contestants can be classified <a href="https://en.wikipedia.org/wiki/With_high_probability">with high probability</a> (w.h.p.) based on the number of solved problems:

<ul>
<li>A contestant that solved exactly 0 problems is a beginner.</li>
<li>A contestant that solved exactly 1 problem is a junior developer.</li>
<li>A contestant that solved exactly 2 problems is a middle developer.</li>
<li>A contestant that solved exactly 3 problems is a senior developer.</li>
<li>A contestant that solved exactly 4 problems is a hacker.</li>
<li>A contestant that solved all five problems is <a href = "https://www.quora.com/What-are-all-the-Jeff-Dean-facts">Jeff Dean</a>.</li>
</ul>
</p>

<p>Please help Chef to identify the programming level of each participant.</p> 

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>N</b> denoting the number of competitors.</li>
<li><b>N</b> lines follow. The <b>i</b>-th of these lines contains five space-separated integers <b>A<sub>i, 1</sub>, A<sub>i, 2</sub>, A<sub>i, 3</sub>, A<sub>i, 4</sub>, A<sub>i, 5</sub></b>. The <b>j</b>-th of these integers (1 ≤ <b>j</b> ≤ 5) is 1 if the <b>i</b>-th contestant solved the <b>j</b>-th problem and 0 otherwise.</li>
</ul>

<h3>Output</h3>
<p>For each participant, print a single line containing one string denoting Chef's classification of that contestant — one of the strings <tt>"Beginner"</tt>, <tt>"Junior Developer"</tt>, <tt>"Middle Developer"</tt>, <tt>"Senior Developer"</tt>, <tt>"Hacker"</tt>, <tt>"Jeff Dean"</tt> (without quotes).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 5000</li>
<li>0 ≤ <b>A<sub>i, j</sub></b> ≤ 1 for each valid <b>i</b>, <b>j</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

7
0 0 0 0 0
0 1 0 1 0
0 0 1 0 0
1 1 1 1 1
0 1 1 1 0
0 1 1 1 1
1 1 1 1 0

<b>Output:</b>

Beginner
Middle Developer
Junior Developer
Jeff Dean
Senior Developer
Hacker
Hacker
</pre>

<h3>Explanation</h3>
<p>The first contestant has no solved problems, therefore he is a beginner. The second contestant solved 2 problems (the second and fourth problem), therefore he has the skills of a middle developer. The third contestant solved 1 problem, therefore he's at the expected level of a junior developer. The fourth contestant solved 5 problems — we can guess it was Jeff Dean. The fifth contestant solved 3 problems, so he is a senior developer. And the last two contestants should be hackers because they solved exactly 4 problems each.</p>
