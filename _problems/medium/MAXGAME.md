---
{"category_name":"medium","problem_code":"MAXGAME","problem_name":"Game Count","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"khadarbasha","problem_tester":"laycurse","date_added":"15-05-2012","tags":{"0":"aug12","1":"combinatorics","2":"khadarbasha","3":"recurrence"},"editorial_url":"http://discuss.codechef.com/problems/MAXGAME","time":{"view_start_date":1344676609,"submit_start_date":1344676609,"visible_start_date":1344677400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Tug of war is a sport that directly puts two teams against each other in a test of strength.

During school days, both Chef Shifu and Chef Po were champions of tug of war.
On behalf of restaurant's anniversary, Chef Shifu and Chef Po have decided to conduct 
a tug of war game for their customers.

<P>
Master Chef Oogway has decided the following rules for the game.
<ol>
    <li>
    Let <b>N</b> be the number of players participating in the game. All of these 
    players would stand in a circle in clock wise direction.
    </li>

    <li>
    There are an infinite number of long ropes available.
    When a rope is held by exactly two players, it is termed as bonding.
    </li>

    <li>
    At least one bonding is necessary to conduct a game.
    </li>

    <li>
    A player can play against multiple people simultaneously i.e he can have more than one bonding at
    the same time. 
    </li>

    <li>
    Both members of a pair of players that have a bonding must have the same number of total
    bondings. That is, if the player <i>A</i>  makes bonding with the player <i>B</i>,
    then the number of total bondings of the player <i>A</i> must be the same as
    that of the player <i>B</i>.
    </li>

    <li>
    Bondings should be created in such a fashion that ropes must not intersect each other. 
    </li>

    <li>
    The number of bondings of every player must be no more than <b>K</b>.
    </li>

</ol>

</p><p>
Now Master Chef Oogway asked Chef Shifu and Chef Po to find out the number of possible games.
Your task is to help them find this number. As this number might become huge,
you've to find it modulo (10^14+7). Two games are different iff there is some
bonding that is present in only of them. 


<h3>Input</h3>
First line contains <b>T</b>, the number of test cases.
Each of <b>T</b> lines contain 2 positive integers <b>N</b> and <b>K</b> separated by a space.
</p><p>
<h3>Output</h3>
For each test case, output the number of ways to conduct the game modulo 100000000000007 (10<sup>14</sup>+7) in one line.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
3 2
4 0
2 1

<b>Output:</b>
4
0
1
</pre>



<b>Explanation:</b>

For the 1st case, there are 3 players. Let's call them p1, p2, p3.
Different games possible are:<br />
Game 1: p1-p2 (numbers of bondings of p1, p2 are 1 ≤ <b>K</b> = 2)<br />
Game 2: p1-p3 (numbers of bondings of p1, p3 are 1 ≤ <b>K</b> = 2)<br />
Game 3: p2-p3 (numbers of bondings of p2, p3 are 1 ≤ <b>K</b> = 2)<br />
Game 4: p1-p2, p1-p3, p2-p3 (numbers of bondings of p1, p2, p3 are 2 ≤ <b>K</b>
= 2)


For the 2nd test case, we cannot form the game, because K = 0 and hence no
player is allowed to make any bonding. As any game must have atleast one
bonding, no game is possible here. 


For the 3rd case, only possible game is:<br />
Game 1: p1-p2 (number of bondings in p1, p2 are 1)


<h3>Constraints</h3>
1 ≤ <b>T</b> ≤ 10000
0 ≤ <b>N</b> ≤ 10000
0 ≤ <b>K</b> ≤ <b>N</b></p>