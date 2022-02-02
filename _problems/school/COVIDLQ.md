---
{"category_name":"school","problem_code":"COVIDLQ","problem_name":"COVID Pandemic and Long Queue","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n1 0 1\r\n7\r\n1 0 0 0 0 0 1\r\n11\r\n0 1 0 0 0 0 0 1 0 0 1","output":"NO\r\nYES\r\nNO","explanation":"**Example case 1:** The first and third spots are occupied and the distance between them is $2$ feet.\r\n\r\n**Example case 2:** The first and seventh spots are occupied and the distance between them is $6$ feet.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/SNL5kiWlaZA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"taran_adm","problem_tester":"","date_added":"2-04-2020","tags":{"0":"april20","1":"cakewalk","2":"taran_1407","3":"taran_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COVIDLQ","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COVIDLQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/COVIDLQ.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/COVIDLQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/COVIDLQ.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/COVIDLQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/COVIDLQ.pdf) as well.

Due to the COVID pandemic, people have been advised to stay at least $6$ feet away from any other person. Now, people are lining up in a queue at the local shop and it is your duty to check whether they are all following this advice.

There are a total of $N$ spots (numbered $1$ through $N$) where people can stand in front of the local shop. The distance between each pair of adjacent spots is $1$ foot. Each spot may be either empty or occupied; you are given a sequence $A_1, A_2, \ldots, A_N$, where for each valid $i$, $A_i = 0$ means that the $i$-th spot is empty, while $A_i = 1$ means that there is a person standing at this spot. It is guaranteed that the queue is not completely empty.

For example, if $N = 11$ and the sequence $A$ is $(0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1)$, then this is a queue in which people are not following the advice because there are two people at a distance of just $3$ feet from each other.

You need to determine whether the people outside the local shop are following the social distancing advice or not. As long as some two people are standing at a distance smaller than 6 feet from each other, it is bad and you should report it, since social distancing is not being followed.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The next line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"YES"` if social distancing is being followed or `"NO"` otherwise (without quotes).

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $0 \le A_i \le 1$ for each valid $i$
- at least one spot is occupied

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
3
1 0 1
7
1 0 0 0 0 0 1
11
0 1 0 0 0 0 0 1 0 0 1
```

### Example Output
```
NO
YES
NO
```

### Explanation
**Example case 1:** The first and third spots are occupied and the distance between them is $2$ feet.

**Example case 2:** The first and seventh spots are occupied and the distance between them is $6$ feet.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>