---
{"category_name":"easy","problem_code":"CLGAME","problem_name":"Up for a Game","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sarthakmanna","problem_tester":null,"date_added":"14-02-2019","tags":{"0":"cole2019","1":"dynamic","2":"easy","3":"sarthakmanna"},"editorial_url":"https://discuss.codechef.com/problems/CLGAME","time":{"view_start_date":1551205800,"submit_start_date":1551205800,"visible_start_date":1551205800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef is again playing a game with his best friend Garry. As usual, the rules of this game are extremely strange and uncommon.

First, they are given a stack of $N$ discs. Each disc has a distinct, non-negative integer written on it. The players exchange turns to make a move. Before the start of the game, they both agree upon a set of positive integers  $S$ of size $K$. It is guaranteed that S contains the integer $1$. In a move, a player can select any value $x$ from $S$ and pop exactly $x$ elements from the top of the stack. The game ends when there are no discs remaining. Chef goes first.

Scoring: For every disc a player pops, his score increases by $2^p$ where $p$ is the integer written on the disc. For example, if a player pops the discs, with integers $p_1, p_2, p_3, \dots, p_m$ written on it, during the entire course of the game, then his total score will be $2^{p_1} + 2^{p_2} + 2^{p_3} + \dots + 2^{p_m}$.

The player with higher score wins the game. Determine the winner if both the players play optimally, or if the game ends in a draw.

###Input:
- First line contains $T$, the number of testcases. Then the testcases follow.
- The first line of each test case contains two space separated integers $N$ and $K$, denoting the size of the stack and the set S respectively.
- Next line contains $N$ space separated integers $A_i$ where $A_1$ is the topmost element, denoting the initial arrangement of the stack.
- The last line of each test case contains $K$ space separated integers each denoting $x_i$.

###Output:
For each testcase, output "Chef" (without quotes) if Chef wins, "Garry" (without quotes) if Garry wins, otherwise "Draw" (without quotes) in a separate line.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 10^5$
- $1 \leq K \leq \min(100, N)$
- $0 \leq A_i \leq 10^9$
- $1 \leq x_i \leq N$
- $x_i \neq x_j$ for all $i \neq j$
- $A_i \neq A_j$ for all $i \neq j$
- Set $S$ contains integer $1$. 
- Sum of $N$ over all test cases does not exceed $10^5$.

###Sample Input:
	1
	3 2
	5 7 1
	1 2

###Sample Output:
	Chef
	
###Explanation:
Chef can select 2 from the set and draw the top two discs (with integers 5 and 7 written on it) from the stack. Garry cannot select 2 from the set as there is only 1 disc left in the stack. However, he can select 1 from the set and pop the last disc.

So, Chef's score = $2^5$ + $2^7$ = $160$  
Garry's score = $2^1$ = $2$  
Chef wins.