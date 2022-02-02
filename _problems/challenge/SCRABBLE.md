---
{"category_name":"challenge","problem_code":"SCRABBLE","problem_name":"Scrabble on a Graph","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"iscsi","date_added":"25-09-2015","tags":{"0":"challenge","1":"nov15","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SCRABBLE","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/SCRABBLE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/SCRABBLE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/SCRABBLE.pdf">Vietnamese</a> as well.</h3>
<p>Let's play <a href="https://en.wikipedia.org/wiki/Scrabble">Scrabble</a> on a graph!</p>
<p>There are <b>K</b> tiles. Each of the tiles either contains a single uppercase Latin letter or is a blank tile — meaning that it can represent any uppercase Latin letter.</p>
<p>Given is also a graph with <b>N</b> nodes and <b>M</b> edges. Initially, some of the nodes contain tiles. The rest of the nodes are unoccupied. </p>
<p>Your goal is to construct words from the tiles, by placing them on the unoccupied nodes of the graph. You need to play a number of correct turns - it is completely up to you, how many turns to play.</p>
<p>Each turn consists of placing at least one of the tiles on some node of the graph which currently has no tile. Then, you need to construct a path in this graph that contains <b>at least one of the just placed tiles</b> such that the string obtained by writing out the letters from the nodes on this path (and previously replacing blank tiles with arbitrary Latin letters) is included in the provided dictionary of <b>existing English words</b>. You can't play one word twice, though the same blank tile can represent different letters in different turns.</p>
<p>Moreover, each node has its own <i>multiplier value</i>, denoting the value by which the score of the placed tile will be multiplied anytime this node participates in the creation of a word.</p>
<p>The score you get for the turn will be equal to the sum of the scores for every tile used in the construction of the word,  each multiplied by the <i>multiplier value</i> of the corresponding node. The number of points for each letter is based on the letter's frequency in standard English writing and will be listed below; commonly used letters such as vowels are worth one point, while less common letters score higher, goign up to <b>10</b> points each for Q and Z.</p>
<p>You need to get as many points as possible in total, in the end (by the last of your output moves). For making game more interesting, you will be aware only of the first <b>min(20, number_of_remaining_letter_tiles)</b> letter tiles in the initially shuffled letter tiles queue.</p>
<h3>The frequency of the letter tiles and corresponding scores</h3>
<ul>
<li><b>0 points</b>: 2% of the total number of the tiles</li>
<li><b>1 point</b>: E × 12%, A × 9%, I × 9%, O × 8%, N × 6%, R × 6%, T × 6%, L × 4%, S × 4%, U × 4%</li>
<li><b>2 points</b>: D × 4%, G × 3%</li>
<li><b>3 points</b>: B × 2%, C × 2%, M × 2%, P × 2%</li>
<li><b>4 points</b>: F × 2%, H × 2%, V × 2%, W × 2%, Y × 2%</li>
<li><b>5 points</b>: K × 1%</li>
<li><b>8 points</b>: J × 1%, X × 1%</li>
<li><b>10 points</b>: Q × 1%, Z × 1%</li>
</ul>
<p>In order to ensure that the number of tiles of each type will be integral, the total number of tiles will always be divisible by <b>100</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>D</b> denoting the number of words in the dictionary.</p>
<p>Each of the following <b>D</b> lines contains a string of uppercase Latin letters, denoting a dictionary word. The dictionary in each test case (except the sample one) will be the same as SOWPODS. You can download it <a href=http://www.codechef.com/download/NOV15/SCRABBLE.txt>here</a>.</p>
<p>The following line contains two space separated integerd <b>N</b> and <b>M</b>, denoting the number of the nodes and edges in the game graph.
</p>
<p>The following line contains <b>N</b> space separated integers, where the <b>i</b><sup>th</sup> of them denotes the <i>multiplier value</i> of the <b>i</b><sup>th</sup> node.</p>
<p>The next line contains <b>N</b> characters. The <b>i</b><sup>th</sup> of these characters is either a dot (character <tt>"."</tt>, ASCII code 46), in case there is no letter written in the <b>i</b><sup>th</sup> node, or an uppercase latin letter - in case this letter is written in the <b>i</b><sup>th</sup> node, or a dash (symbol <tt>"_"</tt>, ASCII code 95) in case there is a blank tile on the corresponding node.</p>
<p>Each of the following <b>M</b> lines contain a pair of space separated integers <b>X<sub>j</sub></b> and <b>Y<sub>j</sub></b>, denoting that there is a bidirectional edge connecting the nodes numbered <b>X<sub>j</sub></b> and <b>Y<sub>j</sub></b>.</p>
<p>The following line contains a string <b>S</b> of <b>min(20, number-of-remaining-letter-tiles)</b> uppercase latin letters and dashes (symbol <tt>"_"</tt>, ASCII code 95), denoting the tiles that you currently have.</p>
<h3>Output</h3>
<p>Output a few blocks, describing the moves. After the last move description, output <b>-1</b> on the separate line.</p>
<p>In the first line of the block describing a move, output <b>C</b> - the number of nodes where you will put the tiles during this move. <b>C</b> should be positive, otherwise you will get a <i>wrong answer</i> verdict.</p>
<p>Then, output <b>C</b> lines, each should contain a single-space-separated uppercase an integer and an uppercase  Latin letter or a dash, denoting the tile you'll put and the node where you'll put it. In case there is no such tile currently, or you put a tile to the node that already has a tile in it, you will get a <i>wrong answer</i> verdict.</p>
<p>The following line should contain a single integer <b>L</b>, denoting the number of letters in the word you'll construct. If <b>L</b> is not positive, you will get a <i>wrong answer</i> verdict.</p>
<p>The following line should contain <b>L</b> space separated integers, denoting a correct path in the graph which forms a word that has never been formed before. As you may have noted, <b>the path doesn't have to be simple</b> If these integers don't represent a correct path, or none of the newly placed tiles is used, you will get a <i>wrong answer</i> verdict.</p>
<p>The following line should contain a string of <b>L</b> uppercase Latin letters, denoting the word you want to play now. In case this is not a dictionary word, or this word had already been played, or the provided path doesn't correspond to this word, you will get a <i>wrong answer</i> verdict.</p>
<p>Finally, if all the requirements are met, you will get an <i>accepted</i> verdict.</p>
<p>Pay attention that you're allowed to play the same blank tile differently in different moves. Also, you should use at least one node among those you've just put a tile on.</p>
<h3>Interactivity details</h3>
<p>This is an <b>interactive</b> challenge problem, so after you output the description of the corresponding move, flush the output buffer. In C++ you can do it with <b>fflush(stdout);</b> routine.</p>
<p>After you do it, you'll receive a new string <b>S</b>, where the used letters will be replaced with the next ones.</p>
<h3>Constraints</h3>
<p>
The test cases for the problem are divided into <b>4</b> groups, each containing <b>5</b> test cases.
</p>
<p>Group 1:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>M</b> = <b>N-1</b></li>
<li>Two nodes (say, the <b>i</b><sup>th</sup> and the <b>j</b><sup>th</sup> one) are connected iff <b>|i-j|=1</b>.</li>
<li><b>K</b> = <b>10<sup>4</sup></b></li>
<li>Initially all nodes doesn't contain tiles.</li>
</ul>

<p>Group 2:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>M</b> = <b>N-1</b></li>
<li>Two nodes (say, the <b>i</b><sup>th</sup> and the <b>j</b><sup>th</sup> one) are connected iff <b>|i-j|=1</b>.</li>
<li><b>K</b> = <b>10<sup>4</sup></b></li>
</ul>

<p>Group 3:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>M</b> = <b>N-1</b></li>
<li>The given graph is a tree.</li>
<li><b>K</b> = <b>10<sup>5</sup></b></li>
</ul>

<p>Group 4:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>N-1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li>The given graph is connected.</li>
<li><b>K</b> = <b>10<sup>5</sup></b></li>
</ul>

<p>Moreover, in all test cases:</p>
<ul>
<li><b>1</b> ≤ multiplier of any node ≤ <b>10</b></li>
</ul>

<h3>Test Cases Generation</h3>
<p>In each test case we will give you randomly generated graph. 0 to 5% of nodes of this graph will be filled with tiles, with the rest being unoccupied.</p>
<p>The string <b>T</b> consists of <b>K</b> symbols, each of which is either a uppercase Latin letter, or a dash denoting a wildcard tile. The frequency of each symbol is given above. The symbols of <b>T</b> are mixed randomly.</p>
<p>Then, some prefix of <b>T</b> with length between <b>0</b> and <b>N*0.05</b> is chosen, and the tiles from this prefix are put onto some random set of nodes - each tile from the prefix will be put onto some node of the graph and no two tiles will be put on the same node. Then, this prefix is removed from <b>T</b>.</p>
<p>The string <b>S</b> at any time is represented by the first unused <b>min{20, |T|}</b> tiles of <b>T</b>. When some tile is used, its' first occurrence is removed from the string <b>T</b>, so in the next turn, the first <b>min(20, |T|)</b> symbols are output as <b>S</b> again.</p>
<h3>Scoring</h3>
<p>The score your solution will get for the test cases is equal to the sum of the scores your solution gets at all the turns.</p>
<p>The total score of your solution is the sum of the scores for all the test files. During the contest, scores only for one test case per group (so, in total, at 4 test cases) are reported.</p>
<h3>Example</h3>
<pre><b>Initial input:</b>
<tt>2
ABCDEF
GHIJKL
15 14
9 8 7 6 5 4 3 2 1 10 1 2 3 4 5
...............
1 2
2 3
3 4
4 5
5 6
6 7
7 8
8 9
9 10
10 11
11 12
12 13
13 14
14 15
ABCDEFGHIJKLMNOPQRST</tt>

<b>First output:</b>
<tt>6
1 G
2 H
3 I
4 J
5 K
6 L
6
1 2 3 4 5 6 
GHIJKL</tt>

<i>This means, you will play a string <b>GHIJKL</b>. Then, after you flush the output buffer, you will get a new string S:</i>

<tt>ABCDEFMNOPQRSTUVWXYZ</tt>

<b>Next possible output:</b>
<tt>6
7 A
8 B
9 C
10 D
11 E
12 F
6
7 8 9 10 11 12
ABCDEF
-1</tt>

</pre>
<h3>Explanation</h3>
<p>Let's calculate the scores for two words you've played.</p>
<p>Word <b>GHIJKL</b>:</p>
<li>Letter G is at the node 1, thus, it gives the score of <b>9 × 2 = 18</b></li>
<li>Letter H is at the node 2, thus, it gives the score of <b>8 × 4 = 32</b></li>
<li>Letter I is at the node 3, this it gives the score of <b>7 × 1 = 7</b></li>
<li>Letter J is at the node 4, thus, it gives the score of <b>6 × 8 = 48</b></li>
<li>Letter K is at the node 5, thus, it gives the score of <b>5 × 5 = 25</b></li>
<li>Letter L is at the node 6, this it gives the score of <b>4 × 1 = 4</b>.</li>

<p>So the total score for this turn is <b>18 + 32 + 7 + 48 + 25 + 4 = 134</b></p>
<p>Word <b>ABCDEF</b>:</p>
<ul>
<li>Letter A is at the node 7, this it gives the score of <b>3 × 1 = 3</b>.</li>
<li>Letter B is at the node 8, this it gives the score of <b>2 × 3 = 6</b>.</li>
<li>Letter C is at the node 9, this it gives the score of <b>1 × 3 = 3</b>.</li>
<li>Letter D is at the node 10, this it gives the score of <b>10 × 2 = 20</b>.</li>
<li>Letter E is at the node 11, this it gives the score of <b>1 × 1 = 1</b>.</li>
<li>Letter F is at the node 12, this it gives the score of <b>2 × 4 = 8</b>.</li>
</ul>
<p>So, the total score for this turn is <b>3 + 6 + 3 + 20 + 1 + 8 = 41</b></p>
<p>The score for the whole game is equal to <b>134 + 41 = 175</b>. This is the score you will get for this output.</p>
<h3>Example #2</h3>
<pre><b>Initial input:</b>
<tt>2
SING
SINGINGS
5 5 
1 2 3 4 5
.....
1 2
2 3
3 4
4 5
4 2
GGIINNSS</tt>

<b>First output:</b>
<tt>4
1 S
2 I
3 N
4 G
4
1 2 3 4
SING</tt>

<i>This means, you will play a string <b>SING</b>. Then, after you flush the output buffer, you will get a new string S:</i>

<tt>GINS</tt>

<b>Next possible output:</b>
<tt>1
5 S
8
1 2 3 4 2 3 4 5
SINGINGS
-1</tt>

<i>The path doesn't have to be simple.</i>

</pre>