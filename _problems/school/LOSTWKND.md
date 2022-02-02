---
{"category_name":"school","problem_code":"LOSTWKND","problem_name":"Lost Weekends","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n14 10 12 6 18 2\r\n10 10 10 10 10 3","output":"No\r\nYes","explanation":"**Example case 1:** Here, $P=2$, so the number of hours Chef has to work from home to handle his workload for days $1$ through $5$ is $[28,20,24,12,36]$. If he works for full $24$ hours on each of the five weekdays, he finishes all the work, so he does not have to work on weekends.\r\n\r\n**Example case 2:** No matter what Chef does, he will have to work on weekends.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/_pQ4HivNMn0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackslash_123","problem_tester":"","date_added":"21-05-2020","tags":{"0":"cakewalk","1":"hackslash_123","2":"ltime84","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LOSTWKND","time":{"view_start_date":1590858002,"submit_start_date":1590858002,"visible_start_date":1590858002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LOSTWKND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME84/hindi/LOSTWKND.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME84/bengali/LOSTWKND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME84/mandarin/LOSTWKND.pdf), [Russian](https://www.codechef.com/download/translated/LTIME84/russian/LOSTWKND.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME84/vietnamese/LOSTWKND.pdf) as well.

Chef recently started working at ABC corporation. Let's number weekdays (Monday through Friday) by integers $1$ through $5$. For each valid $i$, the number of hours Chef spent working at the office on weekday $i$ was $A_i$.

Unfortunately, due to the COVID-19 pandemic, Chef started working from home and his productivity decreased by a considerable amount. As per Chef's analysis, $1$ hour of work done at the office is equivalent to $P$ hours of work done at home.

Now, in order to complete his work properly, Chef has to spend more hours working from home, possibly at the cost of other things like sleep. However, he does not have to do the same work on each day as he would have in the office ― for each weekday, he can start the work for this day on an earlier day and/or complete it on a later day. The only requirement is that his work does not pile up indefinitely, i.e. he can complete his work for each week during the same week. One day has $24$ hours.

If Chef is unable to complete his work for a week during those five weekdays, then he has to work during the weekend too. Chef wishes to know whether he has to work on weekends or if he can complete his work by working only on weekdays. Help him answer that question. (It is possible that Chef would be unable to finish his work even if he worked all the time, but he does not want to know about that.)

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains six space-separated integers $A_1$, $A_2$, $A_3$, $A_4$, $A_5$ and $P$.

### Output
For each test case, print a single line containing the string `"Yes"` if Chef has to work on weekends or `"No"` otherwise (without quotes).

### Constraints
- $1 \le T \le 1,000$
- $0 \le A_i \le 24$ for each valid $i$
- $1 \le P \le 24$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
14 10 12 6 18 2
10 10 10 10 10 3
```

### Example Output
```
No
Yes
```

### Explanation
**Example case 1:** Here, $P=2$, so the number of hours Chef has to work from home to handle his workload for days $1$ through $5$ is $[28,20,24,12,36]$. If he works for full $24$ hours on each of the five weekdays, he finishes all the work, so he does not have to work on weekends.

**Example case 2:** No matter what Chef does, he will have to work on weekends.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>