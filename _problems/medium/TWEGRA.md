---
{"category_name":"medium","problem_code":"TWEGRA","problem_name":"Tweedle Graph","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"24-10-2019","tags":{"0":"alei","1":"cnmp2019","2":"easy","3":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TWEGRA","time":{"view_start_date":1573313400,"submit_start_date":1573313400,"visible_start_date":1573313400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TWEGRA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Tweedledee and Tweedledum are in a fierce battle playing a complicated graph game.

The game is played on an undirected bidirectional simple graph of $N$ vertices (enumerated $1$ trhough $N$) and $(N \cdot (N-1))/2$ edges. We'll denote the beauty of vertex $u$ by $B_u$.

The game goes as follows:

- First Twedledee places a token in one of the vertices of the graph.
- Then players alternate turns, Tweedledum goes first. 
- In their turn a player must move the token to another vertex following one of its adjacent edges, the turn is finished by removing that edge.
- After moving the token from one vertex to another, let's say from $u$ to $v$, the beauty of the game increases by $B_u \cdot B_v$. When the game starts the beauty is equal to zero.
- The player that cannot move loses.

Tweedledee and Tweedledum are legendary grand masters of combinatorial games, so they always play optimally. 

Playing optimally means that:

- If there is at least one move that allows the players winn, then he will choose one of those moves according to the following priorities in order
    - Minimise the number of turns, he want to winn as quick as possible!
    - Maximise the beauty of the game.
- If the player can't winn, then he will choose a move according to the following priorities in order
    - Maximise the number of turns, he want to last the longest possible!.
    - Maximise the beauty of the game.

Ada doesn't want to wait till the end of the game. Help her finding the final beauty of the game.


###Input:

- The first line of input contains an integer $T$, the number of test cases.
- Each test case consist of a single containing one integer $N$, followed by $N$ space separated integers $B_1, B_2, ..., B_N$.


###Output:
For each test case print the final beauty fo the game.

###Constraints 
- $3 \leq N \leq 10^5$
- $1 \leq B_i \leq 10^3$
- The sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

###Sample Input:
```
1
5 1 2 3 4 5
```
###Sample Output:
```
74	
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>