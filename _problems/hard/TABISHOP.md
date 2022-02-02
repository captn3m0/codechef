---
{"category_name":"hard","problem_code":"TABISHOP","problem_name":"Bishops","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"anton_lunyov","date_added":"10-02-2013","tags":{"0":"ad","1":"cook32","2":"line","3":"medium","4":"order","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TABISHOP","time":{"view_start_date":1364150220,"submit_start_date":1364150220,"visible_start_date":1364150220,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Last night, the Chef had a strange dream. He got lost in a Chess Kingdom where the chess pieces lived together on a huge chess board. In that dream, the Chef met the King and asked him for help. Unfortunately, The King really admired the cooking skills of the Chef and wanted The Chef to cook for him every day. The King gave the Chef a task and said that the Chef could leave only after solving it. The task of the King required a lot of calculations and The Chef thought he would have to stay in the Chess Kingdom forever. Hopefully, the Chef woke up and realized that it was just a dream. No! Actually, it was a nightmare. The Chef could not sleep in the rest of the night, worrying that he might meet the King again. Thus, the Chef really needs your help to finish the task of the King.
</p>
<p>
The task that the King gave to the Chef is described as follows. The Chess Kingdom is a <b>N &times; N</b> chess board. The rows are numbered by integers from <b>1</b> to <b>N</b>, inclusive, from the top to the bottom. Similarly, the columns are numbered by integers from <b>1</b> to <b>N</b>, inclusive, from the left to the right. The cell at the intersection of the row <b>i</b> and the column <b>j</b> is denoted as cell <b>(i, j)</b>. The Chess Kingdom is guarded by <b>K</b> bishops standing at <b>K</b> different cells of the board. Additionally, There are <b>M</b> other chess pieces standing on <b>M</b> different cells on the board. The bishop can move any number of squares (maybe zero) diagonally, but can not leap over other pieces. In other words, a bishop at the cell <b>(a, b)</b> can move to the cell <b>(u, v)</b> if we can pick the vector <b>(x, y)</b> in the set <b>{(1, 1), (1, -1), (-1, 1), (-1, -1)}</b> so that <b>u = a + t * x</b> and <b>v = b + t * y</b> for some positive integer <b>t</b> and all the cells of the form <b>(a + i * x, b + i * y)</b> in which <b>1 &le; i &le; t</b> are empty. The cell is called safe if some of the bishops can move to this cell. In particular, all cells, where bishops stand, are safe. The Chef is required to find the number of safe cells.
</p>
<h3>Input</h3>
<p>
The first line of the input contains three space-separated integers  <b>N</b>, <b>K</b>, <b>M</b>. Each of the following <b>K</b> lines contains two space separated integers <b>X</b> and <b>Y</b>, meaning that the cell <b>(X, Y)</b> is occupied by the bishop. Each of the following <b>M</b> lines contains two space separated integers <b>U</b> and <b>V</b>, meaning that the cell <b>(U, V)</b> is occupied by other chess piece.
</p>
<h3>Output</h3>
<p>
Output a single line containing the number of safe cells.
</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> &le; <b>N</b> &le; <b>10<sup>9</sup></b></li>
<li><b>1</b> &le; <b>K</b> &le; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>0</b> &le; <b>M</b> &le; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>1</b> &le; <b>X</b>, <b>Y</b>, <b>U</b>, <b>V</b> &le; <b>N</b></li>
<li>Positions of all <b>K + M</b> chess pieces are distinct</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8 2 2
5 4
4 6
2 4
7 3

<b>Output:</b>
22
</pre><h3>Explanation</h3>
<pre><code>
-------*
*--o--**
-*--***-
--*-*b--
---b*-*-
--***--*
-*o--*--
*-----*-
</code></pre><p></p>
<p>
Bishops are marked by 'b'.<br/> Other chess pieces are marked by 'o'.<br/> Safe cells other than bishop positions are marked by '*'.<br/> There are 20 '*'s plus two 'b's so the result is 22.
</br/></br/></br/></p>
