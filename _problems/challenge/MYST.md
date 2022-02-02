---
{"category_name":"challenge","problem_code":"MYST","problem_name":"Chef in a Mysterious Land (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":null,"date_added":"17-07-2018","tags":{"0":"pieguy"},"time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/MYST.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/MYST.pdf" target="_blank">Mandarin chinese</a>
and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/MYST.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef arrived to a mysterious land. This land consists of $N$ worlds (numbered $1$ through $N$), called *ages*. Chef can travel from an age to another one by the process of *linking*; this process is facilitated by *linking books*. Each linking book allows Chef to travel to a specific age from any age. There may be multiple linking books that link to the same age; all such books are indistinguishable from each other. Each linking book contains a *linking panel*. Whenever Chef touches the linking panel, he and everything he is carrying is instantly teleported to the age this book links to. Note that the linking book you use to teleport is not carried along with him — it remains in the current age. However, Chef can carry at most one other linking book with him when teleporting.

During his journey across the ages, Chef encountered a helpful man named Atrus. This man gave Chef a map of the current locations of all linking books. In exchange for this information, Atrus wants Chef to complete a task: for each age, the books on the map which link to this age have a list of *ideal ages* where they should be located; Chef should move some linking books to other ages in such a way that they are all located in ideal ages. Chef starts in age $1$; help him complete Atrus' task by linking as few times as possible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains an integer $B$ denoting the number of linking books that link to age $i$, followed by a space and $2B$ space-separated integers.
    - The first $B$ of these integers denote the ages where books linking to age $i$ are currently located. These integers are not necessarily different; if the number of some age appears among them $x$ times, there are $x$ books in that age linking to age $i$.
    - The next $B$ integers denote the ages which Atrus considers ideal for these linking books. These integers are not necessarily different either; if the number of some age appears among them $x$ times, there should be $x$ books in that age linking to age $i$ at the end.

### Output
For each test case, print a line containing one integer $L$ — the number of times Chef has to link to other ages in your solution. Then, print $L$ lines describing Chef's linking strategy. Each of these lines should contain two space-separated integers — the age Chef should link to from his current age and the linking age of the book Chef should carry (or $0$ if Chef should not carry any book during this link).

### Constraints 
- $T = 5$
- $30 \le N \le 100$
- $1 \le B \le 30$
- in the initial configuration, it is possible to reach any age from any other age
- in the ideal configuration, each age contains at least two books that do not link to this age
- it is always possible to reach the ideal configuration from the initial configuration

### Example Input
```
1
4
1 4 4
2 1 3 3 1
3 1 2 1 4 1 2
3 4 4 3 1 2 3
```

### Example Output
```
6
3 3
4 3
1 4
4 0
3 4
2 4
```

### Explanation
Note that while the example input does not satisfy the constraints on $T$ and $N$, this input does not appear in the actual test data.

**Example case 1:**
- Initially, there are two linking books located in age $1$ that link to age $3$. Chef links using one of these books while carrying the other one.
- Then, Chef links to age $4$ from age $3$, still carrying the same book as in the previous step.
- In age $4$, there are two books that link to age $4$ itself. Chef links to age $1$, carrying one of them.
- Then, Chef returns to age $4$ using the book he just carried, without carrying another book.
- Finally, Chef takes the other book in age $4$ that links to age $4$, carries it to age $3$ and then to age $2$.

### Scoring
The score for each test case is $L / N$, where $L$ is the number of links in your solution. The score for each test file is the average of scores for the individual test cases. The score of a submission is the sum of scores for all test files.

For the only test case in the example output, the score would be $6 / 4 = 1.5$.

### Test Generation Process
There are twenty test files. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files also.

In each test file, 5 test cases are generated independently. In each of these test cases, $N$ is chosen uniformly randomly between $30$ and $100$ (inclusive). Then, a real number $P$ is chosen uniformly randomly between $2$ and $5$. Next, all $B$-s are generated. Each of them is selected independently from a geometric distribution on the range $[1, 30]$ with mean $P$. As long as the sum of all $B$-s is less than $2N$, the generation of $B$-s is restarted with the same value of $P$. Next, the initial configuration is generated uniformly randomly among all configurations satisfying the constraints. Finally, the ideal configuration is generated uniformly randomly among all configurations satisfying the constraints.
