---
{"category_name":"hard","problem_code":"LYRC","problem_name":"Music \u0026 Lyrics","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"white_king","date_added":"3-06-2012","tags":{"0":"aho","1":"aug13","2":"dynamic","3":"kaushik_iska","4":"medium","5":"string"},"editorial_url":"http://discuss.codechef.com/problems/LYRC","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef Sridhar listenes to music while cooking. He realized that the lyrics of many songs contain the same words. He thought of a task to do in his leisure; pick a set of words and find the frequency of the words in the lyrics of various songs.</p>

<p>A word A from the lyrics is said to match a given word W if W is a substring of A.</p>

<p><b>Note</b> Some words from the lyrics can match multiple given words. For e.g, <b>shawty</b>, matches both <b>shawty</b> as well as <b>hawt</b>. The word <b>shawty</b> in the lyrics must be counted in the frquency of <b>shawty</b> as well as <b>hawt</b>.</p>

<p>You may assume that all the comparisons must be case sensitive. Also, there are no whitespaces within a word in the given list, or in the lyrics. Words in the lyrics are separated by <b>"-"</b> characters (of course without the quotes).</p>

<h3>Input</h3>
<p>First line contains an integer <b>W</b>, denoting the number of words Chef has decided to find the frequencies of. Then follow <b>W</b> lines containing a word (<b>P</b>) each. The next line contains <b>N</b>, the number of lyrics Chef decided to index. Followed by <b>N</b> lines containing a string (<b>S</b>) which chef has to index. You can assume that <b>S</b> doesn't contain any <b>whitespace</b> characters.</p>

<h3>Output</h3>
<p>The output contains <b>W</b> lines each denoting the frequency of the respective word in all of the lyrics together.</p>

<h3>Constraints</h3>
<p>
<b>1 ≤ W ≤ 500</b><br />
<b>1 ≤ |P| ≤ 5000</b>, where <b>|P|</b> denotes length of each word.<br />
<b>1 ≤ N ≤ 100</b><br />
<b>1 ≤ |S| ≤ 50000</b>, where <b>|S|</b> denotes the length of lyric of each song.<br />
All the characters will be either uppercase or lowercase english alphabets or numbers or <b>"-"</b>.
</p>

<h3>Examples</h3>
<pre>
<b>Sample Input 1</b>
5
he
she
sher
his
hers
2
ushers
she-said-he-said-she-said-he-said-his

<b>Sample Output 1</b>
5
3
1
1
1


<b>Sample Input 2</b>
3
who
shawty
hawt
2
Get-it-shawty-Get-it-shawty
Whoa-W-W-Whoa-Shawtyyyyy

<b>Sample Output 2</b>
0
2
3

</pre>