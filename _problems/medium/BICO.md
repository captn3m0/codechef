---
{"category_name":"medium","problem_code":"BICO","problem_name":"BiCo Gaming Grid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"gerald","date_added":"26-02-2013","tags":{"0":"combinatorics","1":"cook45","2":"greedy","3":"simple","4":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/BICO","time":{"view_start_date":1398018600,"submit_start_date":1398018600,"visible_start_date":1398018600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/BICO.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/BICO.pdf">Russian</a> as well.</h3>
<p></p><p>The much anticipated video game "BiCo Grid" has been released. The rules of "Bico Grid" are very simple.</p>
<p>The game field is a 100x100 matrix, where each cell is either a blocked cell, or a cell with some number of coins. For a regular player the look of the field seems pretty random, but the programmer in you recognizes the following pattern: the <b>i</b>-th cell on the <b>n</b>-th row contains <b>C(n, i)</b> coins if and only if <b>0</b> ≤ <b>i</b> ≤ <b>n</b>, all other cells are blocked. Record <b>C(n, i)</b> denotes binomial coefficient "<b>n</b> choose <b>i</b>".</p>
<p>The player starts from the cell situated at row <b>R</b> and column <b>C</b> in the matrix. The objective is to collect <b>exactly G</b> number of coins from matrix in several moves. There are some rules: </p>
<ul>
<li>On each move the player must collect all the coins from some unblocked cell in the current column.</li>
<li>The rules of the game state, that player mustn't be really greedy, so the number of coins he collected must not increase. In other words, if at some move the player collected <b>X</b> coins then further he cannot collect more than <b>X</b> coins in a single move.</li>
<li>After each move, the player is immediately moved to some cell of the column <b>W-1</b> (where <b>W</b> denotes the current column of the player). If the current column of the player has index <b>0</b>, the game ends.</li>
<li>The game ends when player collects <b>exactly G</b> number of coins.</li>
</ul>

<p>You are given the description of the game. Please, output the sequence of moves that win the game (collect exactly <b>G</b> coins)! It is guaranteed that if the player will play optimally it is possible to win the game.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Then <b>T</b> lines follows. Each containing three integers, <b>R</b> denoting the starting row, <b>C</b>, denoting the starting column, and <b>G</b>, denoting the number of coins to be collected.</p>
<h3>Output</h3>
<p>For each test case, output two lines. First line contains <b>K</b>, the number of column visited before completion of game. Second line contains <b>K</b> space separated integers, the number of coins collected from the cells, in the order they were collected.</p>
<p>It is guaranteed that a solution exists. And if there are multiple solutions, print any of them.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10000<br/>0 ≤ <b>C</b> ≤ 49<br/>0 ≤ <b>R</b> ≤ 99<br/>1 ≤ <b>G</b> ≤ 10<sup>12</sup></br/></br/></br/></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2 5
3 3 10
5 4 7

<b>Output:</b>
2
3 2 
1
10 
3
5 1 1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> We first pick 3 coins from [3, 2] then we pick 2 coins from [2, 1]<br/><b>Example case 2.</b> As 3rd column contains 10 coins in cell [5, 3] we pick it.<br/><b>Example case 3.</b> We first pick 5 coins from [5, 4] then we pick 1 coin from [3, 3] and again we pick 1 coin from [2, 2].</br/></br/></p>
