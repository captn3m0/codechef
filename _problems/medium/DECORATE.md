---
{"category_name":"medium","problem_code":"DECORATE","problem_name":"Lucy and the Flowers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"white_king","date_added":"30-11-2012","tags":{"0":"burnside","1":"dec13","2":"hard","3":"hashing","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/DECORATE","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/DECORATE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/DECORATE.pdf">Russian</a>.</h3>
<p>The staff of one of the most famous ChefLand's restaurants have just received the news! A delegation from the neighbouring country is going to visit the restaurant. The staff want to make this visit exciting and pleasant. Lucy is also a member of the staff and among all the things that the staff want to do, her assignment is to arrange the flowers on the tables.</p>
<p>Generally, there are <b>26</b> kinds of flowers, a small latin letter corresponds to a single kind. Equal letters correspond to equal kinds. Different letters correspond to different kinds. According to the old ChefLand tradition, one can make a bouquet from some flowers only if it is a substring of some magic string <b>T</b>. ChefLands make bouquets in such a manner that the order of flowers in them is important. The restaurant has a tradition to decorate a single table with <b>N</b>, not necessary different, bouquets. Their order matters.</p>
<p>Some decorations look really similar. Generally, two arrangements (let's call them <b>A</b> and <b>B</b>) are similar if <b>B</b> is a cyclic shift of <b>A</b>, or <b>B</b> is a reversed cyclic shift of <b>A</b>. For example the sequence ("aba", "c", "b") is a cyclic shift of a sequence ("b", "aba", "c"), and the sequence ("c", "b", "a", "e", "d") is a reversed cyclic shift of a sequence ("a", "b", "c", "d", "e").</p>
<p>Now Lucy thinks that the most beautiful bouquets are "symmetric" ones. The bouquet is "symmetric" if the string that corresponds to the arrangement of flowers in it is a palindrome (it reads from left to right the same as from right to left). </p>
<p>So, she thinks that the decoration of the table will be especially beautiful if all the bouquets in it are "symmetric". But then, Lucy had realized that the number of such decorations of the tables can be less than the number of guests. She doesn't want to decorate two tables in a similar manner, so she would like to know the number of distinct  decorations such that no two tables looks similar.</p>
<h3>Input</h3>
<p>The first line of input consists of a single string <b>T</b>.<br /><br />
The second line of input consists of a single integer <b>N</b>.</p>
<h3>Output</h3>
<p>Output the number of distinct decorations.</p>
<h3>Constraints</h3>
<p>1 ≤ |<b>T</b>| ≤ 100000;<br /><br />
1 ≤ <b>N</b> ≤ 600;<br /><br />
String <b>T</b> consists only of lowercase English letters.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
aba
4

<b>Output:</b>
21
</pre>