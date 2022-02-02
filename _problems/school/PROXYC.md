---
{"category_name":"school","problem_code":"PROXYC","problem_name":"Chef and Proxy","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n9\r\nPAAPPAPPP","output":1,"explanation":"**Example case 1:** With a proxy on the third day, the attendance string is \u0022PAPPPAPPP\u0022. Now, Chef\u0027s attendance is at least 75%, so the minimum number of times Chef needs to be marked as present by proxy is $1$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"saurabhshadow","problem_tester":null,"date_added":"24-04-2019","tags":{"0":"june19","1":"junechallenge","2":"saurabhshadow"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PROXYC","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PROXYC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/PROXYC.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/PROXYC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/PROXYC.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/PROXYC.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/PROXYC.pdf) as well.

Chef is a brilliant university student that does not attend lectures because he believes that they are boring and coding is life! However, his university follows certain rules and regulations, and a student may only take an exam for a course if he has attended at least 75% of lectures for this course.

Since you are Chef's best friend, you want to help him reach the attendance he needs to take exams. Unfortunately, Chef is still focused on his code and refuses to attend more lectures, so the only option is to have some of his friends mark him as present *by proxy*. This trick is well-known in the university, but only few have the talent to pull it off.

In a certain course, there is exactly one lesson per day over the course of $D$ days (numbered $1$ through $D$). You are given a string $S$ with length $D$ describing the lessons Chef attended — for each valid $i$, the $i$-th character of this string is either 'A' if Chef was absent on day $i$ or 'P' if Chef was actually present on day $i$.

For each day $d$ when Chef is absent, one of Chef's friends can mark him as present by proxy on this day only if he was present (if he was really present, not just marked as present) on at least one of the previous two days, i.e. days $d-1$ and $d-2$, and on at least one of the following two days, i.e. days $d+1$ and $d+2$. However, it is impossible to mark him as present by proxy on the first two days and the last two days.

Find the minimum number of times Chef has to be marked as present by proxy so that his attendance becomes at least 75% ($0.75$). Chef's attendance is number of days when he was marked as present, either by proxy or by actually being present, divided by $D$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $D$.
- The second line contains a single string $S$ with length $D$.

### Output
For each test case, print a single line containing one integer — the minimum number of times Chef needs to be marked as present by proxy, or $-1$ if it is impossible to make Chef achieve 75% attendance.

### Constraints 
- $1 \le T \le 200$
- $1 \le D \le 1,000$
- $S$ contains only characters 'A' and 'P'

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
9
PAAPPAPPP
```

### Example Output
```
1
```

### Explanation
**Example case 1:** With a proxy on the third day, the attendance string is "PAPPPAPPP". Now, Chef's attendance is at least 75%, so the minimum number of times Chef needs to be marked as present by proxy is $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>