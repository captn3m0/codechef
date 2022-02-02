---
{"category_name":"school","problem_code":"PERMUT2","problem_name":"Ambiguous Permutations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PHP","33":"PIKE","34":"PRLG","35":"PYPY","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM chicken","41":"SCM guile","42":"SCM qobi","43":"ST","44":"TEXT","45":"WSPC"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1246361499,"submit_start_date":1246361499,"visible_start_date":1246361499,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Some programming contest problems are really tricky: not only do they
require a different output format from what you might have expected, but
also the sample output does not show the difference. For an example,
let us look at permutations.<br />
A <b>permutation</b> of the integers <i>1</i> to <i>n</i> is an
ordering of
these integers. So the natural way to represent a permutation is
to list the integers in this order. With <i>n = 5</i>, a
permutation might look like 2, 3, 4, 5, 1. <br />
However, there is another possibility of representing a permutation:
You create a list of numbers where the <i>i</i>-th number is the
position of the integer <i>i</i> in the permutation. 
Let us call this second
possibility an <b>inverse permutation</b>. The inverse permutation
for the sequence above is 5, 1, 2, 3, 4.
<br />
An <b>ambiguous permutation</b> is a permutation which cannot be
distinguished from its inverse permutation. The permutation 1, 4, 3, 2
for example is ambiguous, because its inverse permutation is the same.
To get rid of such annoying sample test cases, you have to write a
program which detects if a given permutation is ambiguous or not.
</p>
<h3>Input Specification</h3>
<p>The input contains several test cases.<br />
The first line of each test case contains an integer <i>n</i>
(<i>1 ≤ n ≤ 100000</i>).
Then a permutation of the integers <i>1</i> to <i>n</i> follows
in the next line. There is exactly one space character
between consecutive integers.
You can assume that every integer between <i>1</i> and <i>n</i>
appears exactly once in the permutation.
<br />
The last test case is followed by a zero.
</p>
<h3>Output Specification</h3>
<p>For each test case output whether the permutation is ambiguous or not.
Adhere to the format shown in the sample output.
</p>
<h3>Sample Input</h3>
<pre>4
1 4 3 2
5
2 3 4 5 1
1
1
0
</pre>
<h3>Sample Output</h3>
<pre>ambiguous
not ambiguous
ambiguous
</pre>