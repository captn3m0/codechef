---
{"category_name":"easy","problem_code":"BALLOON","problem_name":"ICPC Balloons","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/yfAFpvVfCiU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"9-06-2021","tags":{"0":"cakewalk","1":"cook130","2":"daanish_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BALLOON","time":{"view_start_date":1624214704,"submit_start_date":1624214704,"visible_start_date":1624214704,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BALLOON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK130/mandarin/BALLOON.pdf), [Russian](https://www.codechef.com/download/translated/COOK130/russian/BALLOON.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK130/vietnamese/BALLOON.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK130/bengali/BALLOON.pdf) as well.

Chef is participating in an ICPC regional contest, in which there is a total of $N$ problems (numbered $1$ through $N$) with varying difficulties. For each valid $i$, the $i$-th easiest problem is problem $A_i$.

After a team solves a problem, a balloon with a colour representing that problem is tied next to their desk. Chef is fond of colours in **VIBGYOR**, which are representative of the problems with numbers $1$ through $7$. The remaining problems have their own representative colours too.

Find the minimum number of problems which Chef's team needs to solve in order to get all the balloons for problems $1$ through $7$ (and possibly some other balloons too) tied next to their desk, if you know that Chef's team knows the difficulties of all problems and solves the problems in increasing order of difficulty.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of problems Chef's team needs to solve.

### Constraints
- $1 \leq T \leq 10,500$
- $7 \leq N \leq 15$
- $1 \leq A_i \leq N$ for each valid $i$
- $A_1, A_2, \ldots, A_N$ are pairwise distinct

### Example Input
```
3
7
1 2 3 4 5 7 6
8
8 7 6 5 4 3 2 1
9
7 4 3 5 6 1 8 2 9
```

### Example Output
```
7
8
8
```

### Explanation
**Example case 1:** Since there are a total of $7$ problems, Chef's team will have to solve all of them.

**Example case 2:** Problems $1$ through $7$ appear among the first $8$ problems.

**Example case 3:** Problems $1$ through $7$ again appear among the first $8$ problems.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>