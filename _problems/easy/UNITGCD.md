---
{"category_name":"easy","problem_code":"UNITGCD","problem_name":"Unit GCD","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"noobie27","problem_tester":null,"date_added":"9-03-2020","tags":{"0":"april20","1":"noobie27","2":"pigeonhole","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UNITGCD","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UNITGCD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/UNITGCD.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/UNITGCD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/UNITGCD.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/UNITGCD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/UNITGCD.pdf) as well.

Chef has a recipe book. He wishes to read it completely as soon as possible so that he could try to cook the dishes mentioned in the book.

The pages of the book are numbered $1$ through $N$. Over a series of days, Chef wants to read each page. On each day, Chef can choose to read any set of pages such that there is no prime that divides the numbers of two or more of these pages, i.e. the numbers of pages he reads on the same day must be pairwise coprime. For example, Chef can read pages $1$, $3$ and $10$ on one day, since $(1, 3)$, $(3, 10)$ and $(1, 10)$ are pairs of coprime integers; however, he cannot read pages $1$, $3$ and $6$ on one day, as $3$ and $6$ are both divisible by $3$. Since chef might get bored by reading the same recipe again and again, Chef will read every page exactly once.

Given $N$, determine the minimum number of days Chef needs to read the entire book and the pages Chef should read on each of these days.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case:
- First, print a line containing a single integer $D$ ― the minimum number of days required to read the book. Let's number these days $1$ through $D$.
- Then, print $D$ lines describing the pages Chef should read. For each valid $i$, the $i$-th of these lines should contain an integer $C_i$ followed by a space and $C_i$ space-separated integers ― the numbers of pages Chef should read on the $i$-th day.

If there are multiple solutions with the minimum number of days, you may print any one.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^6$

### Subtasks
**Subtask #1 (20 points):** $N \le 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
5
```

### Example Output
```
2
3 1 2 5
2 3 4
```

### Explanation
**Example case 1:**
- On the first day, Chef should read three pages: $1$, $2$ and $5$.
- On the second day, Chef should read the remaining two pages: $3$ and $4$.

There are other valid solutions as well.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>