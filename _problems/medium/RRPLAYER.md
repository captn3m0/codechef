---
{"category_name":"medium","problem_code":"RRPLAYER","problem_name":"Player","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"tuananh93","date_added":"8-10-2014","tags":{"0":"Rubanenko","1":"cook53","2":"dynamic","3":"easy","4":"probability"},"editorial_url":"http://discuss.codechef.com/problems/RRPLAYER","time":{"view_start_date":1419186837,"submit_start_date":1419186837,"visible_start_date":1419186758,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/mandarin/RRPLAYER.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/russian/RRPLAYER.pdf">Russian</a> as well.</h3>
<p>Petr, Nikita G. and Nikita are the most influential music critics in Saint-Petersburg. They have recently downloaded their favorite band's new album and going to listen to it. Nikita claims that the songs of entire album should be listened strictly in the same order as they are given, because there is the secret message from the author in the songs' order. Petr, being chaotic, does not think so, hence he loves listening to songs in a random order. Petr is pretty good in convincing other people, so after a two-hours discussion Nikita accepted listening in random order(the discussion's duration was like three times longer thatn the album's one). In this context random order means following: There are <b>N</b> songs in the album. In the very beginning random song is chosen(here and further "random song" means that every song has equal probability to be chosen). After some song is over the next one is chosen randomly and independently of what have been played before. <br/><br />
Nikita G., being the only one who is not going to drop out from the university, wonders, what is the expected number of songs guys have to listen to until every song is played at least once.
</br/></p>

<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br/><br />
The first and only line of each test case contains a single integer <b>N</b> denoting the number of songs in the album.
</br/></p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the expected number of songs the guys will listen to. Your answer will be considered as correct if it has an absolute or relative error less than <b>10<sup>−1</sup></b>. More formally if the expected output is <b>A</b> and your output is <b>B</b>, your output will be considered as correct if and only if<br/><b>|A − B| ≤ 10<sup>−1</sup> * max{|A|, |B|, 1}</b>.
</br/></p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 100 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 3000 </b></li>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2
3


<b>Output:</b>
1.0
3.0
5.5


</pre>
<h3>Explanation</h3>
<p><b>Example case 2</b> After playing the first song there is <b>1/2</b> chance to finish the album each time new song is played. So the expected number of songs is <b>2/2 + 3/4 + 4/8... = 3</b> </p>
