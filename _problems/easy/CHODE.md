---
{"category_name":"easy","problem_code":"CHODE","problem_name":"Chef and Codes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":"white_king","date_added":"6-10-2013","tags":{"0":"cakewalk","1":"dec13","2":"programming","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/CHODE","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/CHODE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/CHODE.pdf">Russian</a>.</h3>
<p>Once upon a time chef decided to learn encodings. And, obviously, he started with the easiest one (well, actually the easiest after Caesar cypher) – substitution cypher.<br /><br /><br />
But very soon Chef got bored with encoding/decoding, so he started thinking how to hack this cypher.<br />
He already knows some algorithm, which is not always correct,<br />
but it’s sufficient for now. Here is its description.<br /><br /></p>
<p>Imagine we know frequency sequence of English letters (this means, that letters are sorted by their frequency of appearing in English texts, in ascending order).<br />
And let’s find frequency sequence of cyphered letters (if some of them appear equal number of times, then first in frequency sequence will be lower letter between them).<br />
Now, using this two frequency sequences we can recover plain text. Just substitute cyphered letter with origin one, if they are at same positions in sequences. <br /><br /></p>
<p>Now, Chef has frequency sequence of English letters and cypher text. And he asks you to recover plain text. Please, help him.<br />
</p>
<h3>Input</h3>
<p>In first line number <b>T</b> is given - number of test cases. Then <b>T</b> test cases follow. Each test case consists of two lines - frequency sequence and encrypted text.</p>
<h3>Output</h3>
<p>For each test case you should output decrypted with the given frequency sequence text. Please note, that the case of letters should be preserved. </p>
<h3>Constraints</h3>
<p><ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>1000</b>; </li>
<li> Length of frequency sequence is always 26; </li>
<li> <b>1</b> ≤ length of the text ≤ <b>150000</b>; </li>
<li> <b>1</b> ≤ sum lengths of all texts ≤ <b>150000</b>. </li>
<li> Frequency sequence consists of all lowercase English letters. Text consists of any characters. </li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
qwrtyuipasdfgjkzxcvbnmheol
dummy!
bfgjklmopqrstuwxzhvnicdyea
abcd b efgd hbi!
qwrtyuipasdfgjkzxcvbnmheol
Dummy!

<b>Output:</b>
hello!
have a nice day!
Hello!

</pre>