---
{"category_name":"easy","problem_code":"LONGCOOK","problem_name":"Long Contest and Cook Off Overlaps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2020\r\n2 2020\r\n10 2009\r\n2 2020","output":"1\r\n3","explanation":"**Example case 1:** On the Contests page, we can see that this month (Feb 2020), the Long Contest starts on the 7th and ends on the 17th, while the Cook-Off takes place on the 16th. Hence, there is one month in the given range where the Long Contest and the Cook-Off intersect.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"5-02-2020","tags":{"0":"admin3","1":"easy","2":"feb20","3":"prefix","4":"tmwilliamlin"},"problem_difficulty_level":"Easy","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/LONGCOOK","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LONGCOOK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/LONGCOOK.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/LONGCOOK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/LONGCOOK.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/LONGCOOK.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/LONGCOOK.pdf) as well.

Each month, a CodeChef Long Contest starts at 3 PM IST (UTC+5:30) on the first Friday and it lasts for exactly $10$ days (i.e. $240$ hours). Also, a Cook-Off starts at 9:30 PM IST on the second-to-last (i.e. penultimate) Sunday and it lasts for $2.5$ hours.

Let's denote a month by a pair $(m, y)$, where $m$ is one of the twelve months (numbered $1$ through $12$) and $y$ is a year. You are given two (not necessarily distinct) months, e.g. Oct 2009 and Feb 2020. You have to find the total number of months between these two months (both inclusive) when the Long Contest and Cook-Off intersect, i.e. there is a moment in time when both contests for that month are running simultaneously. Here, we assume that both contests are held on each and every month without any interruptions or schedule changes.

Note: A year is a leap year if it a multiple of $400$, or if it is a multiple of $4$ but not a multiple of $100$. For example, the year $2100$ is not a leap year, but the year $2400$ is a leap year.

Also Note that you have to assume 7th February, 2020 as Friday, and extrapolate it backwords till Year 1 using the leap year rules mentioned.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $m_1$ and $y_1$ describing the first month.
- The second line contains two space-separated integers $m_2$ and $y_2$ describing the second month.

### Output
For each test case, print a single line containing one integer ― the number of months between $(m_1, y_1)$ and $(m_2, y_2)$ when the Long Contest and the Cook-Off intersect.

### Constraints
- $1 \le T \le 10^5$
- $1 \le m_1, m_2 \le 12$
- $1 \le y_1 \le y_2 \le 10^9$
- the month $(m_1, y_1)$ does not come later than $(m_2, y_2)$

### Subtasks
**Subtask #1 (15 points):**
- $T \le 10^3$
- $y_2 \le 2,020$

**Subtask #2 (25 points):** $y_2 \le 10^6$

**Subtask #3 (60 points):** original constraints

### Example Input
```
2
2 2020
2 2020
10 2009
2 2020
```

### Example Output
```
1
3
```

### Explanation
**Example case 1:** On the Contests page, we can see that this month (Feb 2020), the Long Contest starts on the 7th and ends on the 17th, while the Cook-Off takes place on the 16th. Hence, there is one month in the given range where the Long Contest and the Cook-Off intersect.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>