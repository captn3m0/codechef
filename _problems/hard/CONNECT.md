---
{"category_name":"hard","problem_code":"CONNECT","problem_name":"Find a special connected block","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":"laycurse","date_added":"28-02-2012","tags":{"0":"april12","1":"hard","2":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/CONNECT","time":{"view_start_date":1334137565,"submit_start_date":1334137565,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Given an <b>n</b>*<b>m</b> board with a number between -1 and <b>n</b>*<b>m</b> in every entries.

</p><p>And an <b>n</b>*<b>m</b> matrix <b>M</b> is also given, where <b>M</b><sub>i,j</sub> is the cost of selecting the <i>(i,j)</i> entry of the given board.

</p><p>Your task is to find a connected block (which means these entries can reach each other by just go up, down, left and right without going out the block) in the board that contains at least <b>K</b> distinct positive numbers without any -1, and it must have minimum total cost for selecting these entries. Output the minimum total cost.

<h3>Input</h3>
</p><p>First line consists of three integers, <b>n</b>, <b>m</b>, <b>K</b> (1 &lt;= <b>n</b>, <b>m</b> &lt;= 15, 1 &lt;= <b>K</b> &lt;= 7).

</p><p>The followings are two <b>n</b>*<b>m</b> matrices, the first denotes the numbers on the board and the second denotes the cost of every entry.

</p><p>Namely, the first <b>n</b> lines contain <b>m</b> integers, where the <i>j</i>th number in <i>i</i>th line denotes the number on the entry (<i>i</i>,<i>j</i>) of the board. These integers are in [-1, <b>n</b>*<b>m</b>].

</p><p>Next <b>n</b> lines contain <b>m</b> integers too. The <i>j</i>th number in <i>i</i>th line denotes the cost of selecting the entry (<i>i</i>,<i>j</i>) of the board. These integers are in [1, 100000].

<h3>Output</h3>
</p><p>
Only one line contains the minimum cost to finish the task. If the task is impossible, output -1 please.
<h3>Example</h3>

<pre>
<b>Input:</b>
3 3 3
0 0 1 
2 3 3 
-1 2 1 
3 1 5 
4 10 1 
9 3 4 
<b>Output:</b>
8
</pre></p>