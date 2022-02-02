---
{"category_name":"easy","problem_code":"DOMINOG","problem_name":"3 - Domino game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"7-08-2020","tags":{"0":"isaf27"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1607770800,"submit_start_date":1607770800,"visible_start_date":1607770800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DOMINOG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
**This is an interactive problem.**

Let's consider an $n \times m$ rectangle, where $n$ and $m$ are odd numbers and $n \leq m$. All cells except one special cell are covered with domino rectangles, rectangles of size $1 \times 2$ (possibly vertical or horizontal).

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/BENDSP02/DOMINOG/DOMINOG.png" alt="game1 picture" height="100%" width="100%">

This is the picture for the first game from the sample test. Adjacent cells with the same color are in the same domino. The violet cell is the special cell.

You decided to play an interesting game. Initially, you don't know the configuration of the dominos in the rectangle. You want to find the special cell. In one query you can ask about one cell and you will either be told that you have found the special cell, or you will be given the position of the other cell that is covered by the same domino.

You want to find the position of the special cell in no more than $n \cdot (\lceil \log_2{\frac{m}{n}} \rceil + 3)$ queries. Please, write a program that will win this game for you.

###Interaction:

Your program should play several games.

Firstly for each game, you will be given two positive odd integers or two zeroes $n$, $m$ - the sizes of the rectangle's sides. $n = m = 0$ means that your program played all games and it should terminate immediately.

After that, you can make some queries using such format: print two integers $i$, $j$ ($1 \leq i \leq n$, $1 \leq j \leq m$). It means that you ask about the cell in the $i$-th row and $j$-th column. You will be answered with two integers $x$ and $y$. There are some possibilities:

- If $x=0$ and $y=0$, you asked about the special cell. Your program wins this game and it should start playing a new game (so two numbers $n$, $m$ for the next game will be given).
- If $x=-1$ and $y=-1$, your query is incorrect or you have made more than $n \cdot (\lceil \log_2{\frac{m}{n}} \rceil + 3)$ queries. Your program loses this game and it should terminate immediately. It will get "Wrong Answer'' verdict.
- Otherwise $1 \leq x \leq n$, $1 \leq y \leq m$ and $|x-i|+|y-j|=1$. This means that the cell in the $x$-th row and $y$-th column lies in the same domino with the cell you have asked.

To get "Accepted'' verdict your program should find the special cell in no more than $n \cdot (\lceil \log_2{\frac{m}{n}} \rceil + 3)$ queries in all games. To find the special cell your program should query this cell.

**Don't forget to flush the output after printing each query.**

The interactor may be **adaptive**, which means that the position of the special cell and domino positions can be changed during the course of the interaction, but , of course, it is guaranteed that all answers will be correct and consistent with past answers given as well.

To flush the output, you can use:
- `fflush(stdout)` in C++.
- `System.out.flush()` in Java.
- `stdout.flush()` in Python.
- `flush(output)` in Pascal.
- See the documentation for other languages.

###Constraints 

- $1 \leq n \leq m < 1000$
- the number of games does not exceed $1000$
- the sum of $nm$ for all games does not exceed $10^6$

###Subtasks

**Subtask #1 (30 points):** $n = 1$ for all games

**Subtask #2 (70 points):** original constraints

###Sample Input:
    5 5
    4 3
    1 2
    3 2
    3 4
    5 4
    5 5
    0 0
    1 1
    0 0
    0 0

###Sample Output:
    3 3
    1 3
    3 1
    3 5
    5 3
    4 5
    4 4
    1 1
	
###EXPLANATION:

In the sample case, there are two games:

- The first game with $n = m = 5$. The covering with domino rectangles for this game is given in the problem statement.
- The second game with $n = m = 1$. The only cell in the rectangle is special.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>