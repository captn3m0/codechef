---
{"category_name":"school","problem_code":"BOOKCHEF","problem_name":"ChefWatson uses Social Network","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"4-10-2016","tags":{"0":"cakewalk","1":"cook75","2":"darkshadows","3":"sorting"},"time":{"view_start_date":1477247400,"submit_start_date":1477247400,"visible_start_date":1477247400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/mandarin/BOOKCHEF.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/russian/BOOKCHEF.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/vietnamese/BOOKCHEF.pdf">Vietnamese</a> as well.</h3>

<p>Chef Watson uses a social network called ChefBook, which has a new feed consisting of posts by his friends. Each post can be characterized by <b>f</b> - the identifier of the friend who created the post, <b>p</b> - the popularity of the post(which is pre-calculated by ChefBook platform using some machine learning algorithm) and <b>s</b> - the contents of the post which is a string of lower and uppercase English alphabets.</p>
<p>Also, Chef has some friends, which he has marked as <i>special</i>.</p>

<p>The algorithm used by ChefBook for determining the order of posts in news feed is as follows:
<ul>
<li>Posts of <i>special</i> friends should be shown first, irrespective of popularity. Among all such posts the popular ones should be shown earlier.</li>
<li>Among all other posts, popular posts should be shown earlier.</li>
</ul>
</p>

<p>Given, a list of identifiers of Chef's <i>special</i> friends and a list of posts, you have to implement this algorithm for engineers of ChefBook and output the correct ordering of posts in the new feed. </p>

<h3>Input</h3>
<p>First line contains <b>N</b>, number of <i>special</i> friends of Chef and <b>M</b>, the number of posts. Next line contains <b>N</b> integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> denoting the identifiers of <i>special</i> friends of Chef. Each of the next <b>M</b> lines contains a pair of integers and a string denoting <b>f</b>, <b>p</b> and <b>s</b>, identifier of the friend who created the post, the popularity of the post and the contents of the post, respectively. It is guaranteed that no two posts have same popularity.</p>

<h3>Output</h3>
<p>Output correct ordering of posts in news feed in <b>M</b> lines. Output only the contents of a post.
</p>
<h3>Constraints</h3>
<ul>
  <li><b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>3</sup></b></li>
  <li><b>1</b> ≤ <b>A<sub>i</sub>, f, p</b> ≤  <b>10<sup>5</sup></b></li>
  <li><b>1</b> ≤ <b>length(s)</b> ≤  <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2 4
1 2
1 1 WhoDoesntLoveChefBook
2 2 WinterIsComing
3 10 TheseViolentDelightsHaveViolentEnds
4 3 ComeAtTheKingBestNotMiss

<b>Output:</b>
WinterIsComing
WhoDoesntLoveChefBook
TheseViolentDelightsHaveViolentEnds
ComeAtTheKingBestNotMiss

</pre>
<h3>Explanation</h3>
<p>
First we should show posts created by friends with identifiers <b>1</b> and <b>2</b>. Among the posts by these friends, the one with more popularity should be shown first.<br/>
Among remaining posts, we show those which are more popular first.
</p>