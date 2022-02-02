---
{"category_name":"easy","problem_code":"LUCKYBAL","problem_name":"Little Elephant and Balance","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"1-03-2012","tags":{"0":"cook22","1":"easy","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKYBAL","time":{"view_start_date":1337540632,"submit_start_date":1337540632,"visible_start_date":1337539200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>

<p>The Little Elephant calls some string <b>T</b> of the length <b>M</b> <i>balanced</i> if there exists at least one integer <b>X</b> (<b>1 ≤ X ≤ M</b>) such that the number of digits <b>4</b> in the substring <b>T[1, X - 1]</b> is equal to the number of digits <b>7</b> in the substring <b>T[X, M]</b>. For example, the string <b>S = 7477447</b> is balanced since <b>S[1, 4] = 7477</b> has 1 digit <b>4</b> and <b>S[5, 7] = 447</b> has 1 digit <b>7</b>. On the other hand, one can verify that the string <b>S = 7</b> is not balanced.</p>

<p> The Little Elephant has the string <b>S</b> of the length <b>N</b>. He wants to know the number of such pairs of integers <b>(L; R)</b> that <b>1 ≤ L ≤ R ≤ N</b> and the substring <b>S[L, R] </b> is balanced. Help him to find this number.</p>

<p><b>Notes.</b></p>

Let <b>S</b> be some lucky string. Then

<ul>

<li><b>|S|</b> denotes the length of the string <b>S</b>;

</li><li><b>S[i]</b> (<b>1 ≤ i ≤ |S|</b>) denotes the <b>i</b><sup>th</sup> character of <b>S</b> (the numeration of characters starts from <b>1</b>);

</li><li> <b>S[L, R]</b> (<b>1 ≤ L ≤ R ≤ |S|</b>) denotes the string with the following sequence of characters: <b>S[L], S[L + 1], ..., S[R]</b>, and is called a <i>substring</i> of <b>S</b>. For <b>L &gt; R</b> we mean by <b>S[L, R]</b> an empty string.

</li></ul>

<h3>Input</h3>
<p>The first line of the input file contains a single integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains one string, the string <b>S</b> for the corresponding test case. The input file does not contain any whitespaces.</p>

<h3>Output</h3>
For each test case output a single line containing the answer for this test case.

<h3>Constraints</h3>
<p> 1 ≤ <b>T</b> ≤ 10
</p><p> 1 ≤ <b>|S|</b> ≤ 100000
</p><p> <b>S</b> consists only of the lucky digits <b>4</b> and <b>7</b>.


<h3>Example</h3>

<pre>
<b>Input:</b>
4
47
74
477
4747477

<b>Output:</b>
2
2
3
23

</pre>

<h3>Explanation</h3>
</p><p>In the first test case balance substrings are <b>S[1, 1] = 4</b> and <b>S[1, 2] = 47</b>.</p>
<p>In the second test case balance substrings are <b>S[2, 2] = 4</b> and <b>S[1, 2] = 74</b>.</p>
<p><b>Unfortunately, we can't provide you with the explanations of the third and the fourth test cases. You should figure it out by yourself. Please, don't ask about this in comments.</b></p>