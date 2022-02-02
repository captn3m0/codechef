---
{"category_name":"easy","problem_code":"LUCKYSTR","problem_name":"Little Elephant and Strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"1-03-2012","tags":{"0":"cook22","1":"easy","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKYSTR","time":{"view_start_date":1337541022,"submit_start_date":1337541022,"visible_start_date":1337539200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>

<p>The Little Elephant has <b>K</b> favorite lucky strings <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>K</sub></b>. He thinks that the lucky string <b>S</b> is <i>good</i> if either <b>|S|</b> ≥ <b>47</b> or for some <b>j</b> from <b>1</b> to <b>K</b> we have that <b> A<sub>j</sub></b> is a substring of <b>S</b>.</p>

<p>The Little Elephant has found <b>N</b> lucky strings <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>N</sub></b> under the pillow. Now he wants to know which of them are good. Help him and find for each <b>i</b> from <b>1</b> to <b>N</b> whether the string <b>B<sub>i</sub></b> is good or not.</p>

<p><b>Notes.</b></p>

Let <b>S</b> be some lucky string. Then

<ul>

<li><b>|S|</b> denotes the length of the string <b>S</b>;

</li><li><b>S[i]</b> (<b>1 ≤ i ≤ |S|</b>) denotes the <b>i</b><sup>th</sup> character of <b>S</b> (the numeration of characters starts from <b>1</b>);

</li><li>The string <b>T</b> of the length <b>M</b> is called a <i>substring</i> of <b>S</b> if for some <b>k</b> from <b>0</b> to <b>|S| - M</b> we have <br />
<b>T[1] = S[k + 1], T[2] = S[k + 2], ..., T[M] = S[k + M]</b>.

</li></ul>

<h3>Input</h3>

<p>The first line of the input file contains two integers <b>K</b> and <b>N</b>, the number of favorite lucky strings of the Little Elephant and the number of strings he has found under the pillow. Each of the following <b>K</b> lines contains one favorite lucky string. Namely, <b>j</b><sup>th</sup> line among these <b>K</b> lines contains the string <b>A<sub>j</sub></b>. Each of the following <b>N</b> lines contains one lucky string that was found under the pillow. Namely, <b>i</b><sup>th</sup> line among these <b>N</b> lines contains the string <b>B<sub>i</sub></b>. The input file does not contain any whitespaces.</p>

<h3>Output</h3>

<p>For each of the <b>N</b> strings that were found under the pillow print <b>Good</b> if it is good, and <b>Bad</b> otherwise.</p>

<h3>Constraints</h3>
<p>1 ≤ <b>K, N</b> ≤ 50
</p><p>For each string <b>S</b> in the input file we have 1 ≤ <b>|S|</b> ≤ 50.
</p><p>Each string in the input file consists only of the lucky digits <b>4</b> and <b>7</b>.

<h3>Example</h3>

<pre>

<b>Input:</b>
2 4
47
744
7444
447
7774
77777777777777777777777777777777777777777777774

<b>Output:</b>
Good
Good
Bad
Good

</pre>

<h3>Explanation</h3>
</p><p>The string <b>S = 7444</b> is good since the favorite string <b>744</b> is its substring.</p>
<p>The string <b>S = 447</b> is good since the favorite string <b>47</b> is its substring.</p>
<p>The string <b>S = 7774</b> is bad since none of the favorite strings <b>47</b> and <b>744</b> is a substring of <b>S</b>.</p>
<p>The string <b>S = 77777777777777777777777777777777777777777777774</b> is good since its length is <b>47</b>. Note, however, that <b>S</b> does not have favorite substrings at all.</p>