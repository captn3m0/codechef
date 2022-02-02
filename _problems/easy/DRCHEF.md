---
{"category_name":"easy","problem_code":"DRCHEF","problem_name":"Doctor Chef","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 5\r\n1 2 3 4 5\r\n5 1\r\n40 30 20 10 50\r\n3 10\r\n20 1 110","output":"5\r\n9\r\n6","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/egunuc2OkeQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sudipandatta","problem_tester":"","date_added":"12-05-2020","tags":{"0":"easy","1":"greedy","2":"july20","3":"sudipandatta","4":"sudipandatta"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DRCHEF","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DRCHEF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/DRCHEF.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/DRCHEF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/DRCHEF.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/DRCHEF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/DRCHEF.pdf) as well.

Chef is multi-talented. He has developed a cure for coronavirus called COVAC-19. Now that everyone in the world is infected, it is time to distribute it throughout the world efficiently to wipe out coronavirus from the Earth. Chef just cooks the cure, you are his distribution manager.

In the world, there are $N$ countries (numbered $1$ through $N$) with populations $a_1, a_2, \ldots, a_N$. Each cure can be used to cure one infected person once. Due to lockdown rules, you may only deliver cures to one country per day, but you may choose that country arbitrarily and independently on each day. Days are numbered by positive integers. On day $1$, Chef has $x$ cures ready. On each subsequent day, Chef can supply twice the number of cures that were delivered (i.e. people that were cured) on the previous day. Chef cannot supply leftovers from the previous or any earlier day, as the cures expire in a day. The number of cures delivered to some country on some day cannot exceed the number of infected people it currently has, either.

However, coronavirus is not giving up so easily. It can infect a cured person that comes in contact with an infected person again ― formally, it means that the number of infected people in a country doubles at the end of each day, i.e. after the cures for this day are used (obviously up to the population of that country).

Find the minimum number of days needed to make the world corona-free.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $x$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of days.

### Constraints
- $1 \le T \le 10^3$
- $1 \le N \le 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$
- $1 \le x \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (20 points):** $a_1 = a_2 = \ldots = a_N$

**Subtask #2 (80 points):** original constraints

### Example Input
```
3
5 5
1 2 3 4 5
5 1
40 30 20 10 50
3 10
20 1 110
```

### Example Output
```
5
9
6
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>