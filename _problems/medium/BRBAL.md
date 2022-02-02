---
{"category_name":"medium","problem_code":"BRBAL","problem_name":"Balancing Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n())\r\n((\r\n()))\r\n()((","output":3,"explanation":"**Example case 1:** You can give $S_1$ to $Q$ and $S_2$ and $S_3$ to $P$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/mr0AKKiglVI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":"","date_added":"5-09-2020","tags":{"0":"binary","1":"cook122","2":"dynamic","3":"easy","4":"rahuldugar","5":"rishup_nitdgp","6":"smartnj","7":"smartnj"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/BRBAL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BRBAL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK122/hindi/BRBAL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK122/mandarin/BRBAL.pdf), [Russian](https://www.codechef.com/download/translated/COOK122/russian/BRBAL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK122/vietnamese/BRBAL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK122/bengali/BRBAL.pdf) as well.

Two of your friends (let's denote them by $P$ and $Q$) are playing a game and you are acting as their dealer. The rules of the game are as follows:
- There are $N$ bracket sequences, denoted by $S_1, S_2, \ldots, S_N$.
- Initially, both players do not have any sequences. They play up to $N$ turns. For each valid $i$, in the $i$-th turn, you have to choose one player and give the bracket sequence $S_i$ to this player.
- After each turn, if it is possible to arrange **all** the sequences of one player in some order and concatenate them in such a way that the resulting bracket sequence is non-empty and *balanced*, that player immediately wins and the game ends. Note that it is impossible for both players to form non-empty balanced sequences at the same time.

You like $P$ more and hence want $P$ to win. Find the smallest number of turns you need in order to make $P$ win or determine that it is impossible to achieve this.

Notes:
- A bracket sequence is an arbitrary string containing only characters '(' and ')'.
- A balanced bracket sequence is one of the following:
    - An empty string.
    - A concatenation of two non-empty balanced bracket sequences.
    - A string formed by adding '(' to the beginning and ')' to the end of a balanced bracket sequence.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single string $S_i$.

### Output
For each test case, print a single line containing one integer ― the smallest number of turns needed to make $P$ win or $-1$ if it is impossible.

### Constraints 
- $1 \le T \le 15$
- $1 \le N \le 200$
- $1 \le |S_i| \le 200$ for each valid $i$

### Example Input
```
1
4
())
((
()))
()((
```

### Example Output
```
3
```

### Explanation
**Example case 1:** You can give $S_1$ to $Q$ and $S_2$ and $S_3$ to $P$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>