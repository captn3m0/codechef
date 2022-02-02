---
{"category_name":"easy","problem_code":"MATDYS","problem_name":"Mathison and the Dynamo shuffle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"alexvaleanu","problem_tester":"kingofnumbers","date_added":"15-08-2017","tags":{"0":"alexvaleanu","1":"easy","2":"ltime51","3":"observations"},"editorial_url":"https://discuss.codechef.com/problems/MATDYS","time":{"view_start_date":1503768600,"submit_start_date":1503768600,"visible_start_date":1503768600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/mandarin/MATDYS.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/russian/MATDYS.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/vietnamese/MATDYS.pdf">vietnamese</a> as well.</h3>

<p>Mathison has bought a new deck of cards that contains 2<sup><b>N</b></sup> cards, numbered and ordered from 0 to 2<sup><b>N</b></sup>-1.</p>

<p>Mathison is getting bored and decides to learn the <a href="https://www.youtube.com/watch?v=8T9yeV9oT2o">Dynamo shuffle</a> (or Sybil cut) - a flashy manner to shuffle cards. Unfortunately, the Dynamo shuffle is a little too complicated so Mathison decides to create his own shuffle.
</p>


<p>
 This newly invented shuffle is done in <b>N</b> steps. At step k (0 ≤ k &lt; <b>N</b>) the deck is divided into 2<sup>k</sup> equal-sized decks
 where each one contains cards that lie on consecutive positions.
 Each one of those decks is then reordered: all the cards that lie on even positions are placed first followed by all cards that lie on odd positions
  (the order is preserved in each one of the two subsequences and all positions are 0-based). Then all the decks are put back together (preserving the order of decks).
</p>

<p>
 Mathison has spent hours practising the shuffle and he now believes that he has perfected his technique. However, Chef doesn't believe him yet so he asks Mathison to answer <b>Q</b> questions that given a deck of size 2<sup><b>N</b></sup> where i-th card is labelled i, find the position of the card labelled <b>K</b> in the final, shuffled deck.
</p>

<h3>Input</h3>
<p>The first line of the input file will contain one integer, <b>Q</b>, representing the number of Chef's questions.</p>
<p>Each of the next <b>Q</b> lines will contain a pair of integers, <b>N</b> and <b>K</b>.</p>

<h3>Output</h3>
<p>The output file will contain <b>Q</b> lines, each one representing the answer to one of Chef's questions.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>Q</b> ≤ 1000</li>
<li>1 ≤ <b>N</b> ≤ 64</li>
<li>0 ≤ <b>K</b> &lt; 2<sup><b>N</b></sup></li>
</ul>

<h3>Subtaks</h3>
<p><b>Subtask #1</b> (30 points):
<ul>
<li>1 ≤ <b>N</b> ≤ 10</li>
</ul>
</p>

<p><b>Subtask #2</b> (30 points):
<ul>
<li>1 ≤ <b>N</b> ≤ 32</li>
</ul>
</p>

<p><b>Subtask #3</b> (40 points):
<ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3
3 4
3 3
3 2

<b>Output:</b>
1
6
2
</pre>
<br />
<pre><b>Input:</b>
1
64 11047805202224836936

<b>Output:</b>
1337369305470044825
</pre>

<h3>Explanation</h3>
<pre>
In all questions, we have <b>N</b> = 3. Therefore, we have a deck with 8 cards.
The shuffling is done in three steps:

Step 0: We divide {0, 1, 2, 3, 4, 5, 6, 7} in 2<sup>0</sup> decks. We get only one deck.
        The deck is reordered into {0, 2, 4, 6, 1, 3, 5, 7}.

Step 1: We divide {0, 2, 4, 6, 1, 3, 5, 7} in 2<sup>1</sup> decks. We get two decks: {0, 2, 4, 6} and {1, 3, 5, 7}.
        {0, 2, 4, 6} is reordered into {0, 4, 2, 6} while {1, 3, 5, 7} is reordered into {1, 5, 3, 7}.
        We get {0, 4, 2, 6, 1, 5, 3, 7} when we put the decks back together.

Step 2: We divide {0, 4, 2, 6, 1, 5, 3, 7} in 2<sup>2</sup> decks. We get four decks: {0, 4}, {2, 6}, {1, 5} and {3, 7}.
        Each one of the four decks stays the same after it is reordered (as there are only two elements to reorder).
        We get the final, shuffled deck: {0, 4, 2, 6, 1, 5, 3, 7}.

The card labelled 4 is on position 1.
The card labelled 3 is on position 6.
The card labelled 2 is on position 2.
</pre>
