---
{"category_name":"school","problem_code":"FRGTNLNG","problem_name":"Forgotten Language","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"shangjingbo","date_added":"25-07-2015","tags":{"0":"basic","1":"cakewalk","2":"cook62","3":"kostya_by","4":"strings"},"editorial_url":"http://discuss.codechef.com/problems/FRGTNLNG","time":{"view_start_date":1442773686,"submit_start_date":1442773686,"visible_start_date":1442773800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK62/mandarin/FRGTNLNG.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK62/russian/FRGTNLNG.pdf">Russian</a> as well.</h3>
<p><meta charset="utf8" /></p>
<p>
Forgotten languages (also known as extinct languages) are languages that are no longer in use. Such languages were, probably, widely used before and no one could have ever imagined that they will become extinct at some point. Unfortunately, that is what happened to them. On the happy side of things, a language may be dead, but some of its words may continue to be used in other languages.
</p>
<p>
Using something called as <em>the Internet</em>, you have acquired a dictionary of <b>N</b> words of a forgotten language. Meanwhile, you also know <b>K</b> phrases used in modern languages. For each of the words of the forgotten language, your task is to determine whether the word is still in use in any of these <b>K</b> modern phrases or not.
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>
The first line of a test case description contains two space separated positive integers <b>N</b> and <b>K</b>.
</p>
<p>
The second line of the description contains <b>N</b> strings denoting a dictionary of the forgotten language.
</p>
<p>
Each of the next <b>K</b> lines of the description starts with one positive integer <b>L</b> denoting the number of words in the corresponding phrase in modern languages. The integer is followed by <b>L</b> strings (not necessarily distinct) denoting the phrase.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> tokens (space-separated): if the <b>i</b><sup>th</sup> word of the dictionary exists in at least one phrase in modern languages, then you should output <b>YES</b> as the <b>i</b><sup>th</sup> token, otherwise <b>NO</b>.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20</li>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>K, L</b> ≤ 50</li>
<li>1 ≤ length of any string in the input ≤ 5</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 2
piygu ezyfo rzotm
1 piygu
6 tefwz tefwz piygu ezyfo tefwz piygu
4 1
kssdy tjzhy ljzym kegqz
4 kegqz kegqz kegqz vxvyj

<b>Output:</b>
YES YES NO 
NO NO NO YES 

</pre>