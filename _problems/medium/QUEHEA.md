---
{"category_name":"medium","problem_code":"QUEHEA","problem_name":"Queen of Hearts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"kingofnumbers","date_added":"25-07-2016","tags":{"0":"alei","1":"cook73","2":"data","3":"medium","4":"qeahea","5":"segment"},"editorial_url":"https://discuss.codechef.com/questions/84223/qeahea-editorial","time":{"view_start_date":1471804200,"submit_start_date":1471804200,"visible_start_date":1471804200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/mandarin/QUEHEA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/russian/QUEHEA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/vietnamese/QUEHEA.pdf">Vietnamese</a> as well.</h3>

<p>
Wonderland is a wonderful world inhabited by <b>N</b> strange creatures, for simplicity all creatures are numbered from <b>1</b> to <b>N</b>. Every creature has exactly one best friend (it could be himself too). Note that, the friendship relationship is not bidirectional, meaning that it might be the case person x is best friend of y, but y is  not best friend of x. Besides that, there is a very intricate admiration relationship among the creatures. Every creature admires himself and to all the creatures admired by his best friend.
</p>

<p>
Wonderland is divided in many guilds, each creature belonging to exactly one guild, also each guild contains at least one creature. A guild is defined as the largest set of creatures in which if we take any two creatures <b>i</b>, <b>j</b>, then there exists a creature <b>k</b> such that both <b>i</b> and <b>j</b> admire <b>k</b>. For given best friend relationship for all persons, the guilds formed will be uniquely defined.
</p>

<p>
The queen of hearts is very angry because someone stole her tarts, so she is going to perform many executions. After the executions some of the creatures will lose his best friend, and will stop admiring all the creatures admired by his best friend, in consequence the number of guilds could change.
</p>

<p>
Alice have <b>Q</b> queries of the form <b>L, R</b>, and she asks you to determine the number of guilds after the executions if the only survivors are the creatures numbered from <b>L</b> to <b>R</b>.
</p>

<h3>Input</h3>
<p>The first line of the input contains two integers <b>N</b> and <b>Q</b>.</p>
<p>In the next line there are <b>N</b> space separated integers, the i-th integer <b>a<sub>i</sub></b> represents the best friend of the i-th creature.</p>
<p>Then follows <b>Q</b> lines each one with two integers <b>L, R</b> representing one query.</p>

<h3>Output</h3>
<p>For each query, output the number of guilds after the execution.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>L</b>  ≤  <b>R</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b>  ≤  <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
9 3
2 8 4 3 9 9 8 3 3
1 6
7 9
3 6
</tt>
<b>Output:</b><tt>
4
2
3</tt>
</pre>

<h3>Explanation</h3>
<p>Initially there is just one guild.</p>
<p>After the executions of the first query the guilds will be <b>{ {1, 2}, {3, 4}, {5},{6} }</b>.</p>
<p>After the executions of the second query the guilds will be <b>{ {7, 8}, {9} }</b>.</p>
<p>After the executions of the third query the guilds will be <b>{ {3,4}, {5},{6} }</b>.</p>