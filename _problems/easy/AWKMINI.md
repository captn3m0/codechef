---
{"category_name":"easy","problem_code":"AWKMINI","problem_name":"Awkwardness Minimization","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/28VBtSOuibA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dpraveen_adm","problem_tester":"","date_added":"12-10-2019","tags":{"0":"dpraveen_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/AWKMINI","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=AWKMINI","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are teaching a class of $N$ students. Today, during the morning prayer, all the students are standing in a line. You are given a string $s$ with length $N$; for each valid $i$, the $i$-th character of this string is 'b' if the $i$-th student in the line is a boy or 'g' if this student is a girl.

The *awkwardness* of this configuration of students is defined as the sum of pairwise distances between each boy and girl. The distance between the $i$-th and $j$-th student in the line is $|i - j|$. Formally, the awkwardness is $$\sum\limits_{i=1}^N \, \sum\limits_{j=i+1\\ s_j \neq s_i}^N (j - i)\,.$$

As the teacher, it is your responsibility to reorder the students in such a way that the awkwardness of the resulting configuration is the smallest possible. You may reorder the students in the line in any way you want. Find the minimum awkwardness that can be achieved.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $s$.

### Output
For each test case, print a single line containing one integer - the minimum possible awkwardness.

### Constraints
- $1 \le T \le 10^5$
- $1 \le |s| \le 10^5$
- each character of $s$ is either 'b' or 'g'
- the sum of $|s|$ over all test cases does not exceed $4 \cdot 10^6$

### Example Input
```
3
gb
bgg
bbgg
```

### Example Output
```
1
2
6
```

### Explanation
**Example case 1:** The total awkwardness is $|1 - 0| = 1$, no matter how you arrange the students.

**Example case 2:** Initially, the awkwardness is $|1 - 0| + |2 - 0| = 1 + 2 = 3$. However, you can move the boy between the two girls, i.e. choose the configuration "gbg". Here, the awkwardness is $|1 - 0| + |2 - 1| = 1 + 1 = 2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>