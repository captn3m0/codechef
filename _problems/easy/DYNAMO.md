---
{"category_name":"easy","problem_code":"DYNAMO","problem_name":"Chef and Dynamo","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amit_dwivedi","problem_tester":null,"date_added":"9-08-2019","tags":{"0":"amit_dwivedi","1":"amit_dwivedi","2":"interactive","3":"jan20","4":"simple","5":"vijju123"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DYNAMO","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DYNAMO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/DYNAMO.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/DYNAMO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/DYNAMO.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/DYNAMO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/DYNAMO.pdf) as well.

"The secret impresses no one, the trick you use it for is everything." - The Prestige

**This is an interactive problem.**

An $N$-perfect number is defined as a positive integer with at most $N$ digits (in decimal representation without leading zeros) ― that is, $X$ is an $N$-perfect number if $0 \lt X \lt 10^N$.

Chef has a friend named Dynamo, who is a legendary magician. Chef learned a new magic trick from him and now, he wants to impress his friend Cheffa by showing her the trick:
- First, Cheffa should choose a positive integer $N$ and tell it to Chef.
- Then, Cheffa should choose an $N$-perfect number $A$ and tell it to Chef, who should then choose a positive integer $S$ and tell it to Cheffa.
- Then, Cheffa and Chef should alternately tell each other four $N$-perfect numbers $B$, $C$, $D$ and $E$ (in this order). Cheffa chooses $B$ and $D$, while Chef chooses $C$ and $E$.
- Cheffa will be really impressed if $S$ turns out to be equal to $A+B+C+D+E$. Otherwise, Cheffa will be angry that Chef was wasting her time with a failed magic trick.

Since Chef is busy in the kitchen, you should perform the magic trick for him and impress Cheffa. The grader is acting as Cheffa and it is trying to make the magic trick fail.

### Interaction
- First, you should read a line containing a single integer $T$. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing a single integer $N$. Then, you should perform the following actions:
    - Read a line containing a single integer $A$.
    - Print a line containing a single integer $S$.
    - Read a line containing a single integer $B$.
    - Print a line containing a single integer $C$.
    - Read a line containing a single integer $D$.
    - Print a line containing a single integer $E$.
    - Finally, you should read a line containing a single integer: $1$ if your predicted sum $S$ is correct or $-1$ if it is incorrect.

Note that when you receive $-1$ at the end of a test case, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 18$
- $1 \le A, B, C, D, E \lt 10^N$
- $1 \le S \le 5 \cdot 10^N$

### Subtasks
**Subtask #1 (20 points):** $1 \le N \le 5$

**Subtask #2 (80 points):** original constraints

### Example
```
You             Grader
                1
                2
                10
50
                10
12
                10
8
                1
```

### Explanation
**Example case 1:** The sum of $A=10$, $B=10$, $C=12$, $D=10$ and $E=8$ is $50$, which is the same as the predicted sum.

Note that this example is just supposed to clarify the interaction. The grader will not be as friendly.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>