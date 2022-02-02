---
{"category_name":"school","problem_code":"MEET","problem_name":"Chef and Meetings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n12:01 AM\r\n4\r\n12:00 AM 11:42 PM\r\n12:01 AM 11:59 AM\r\n12:30 AM 12:00 PM\r\n11:59 AM 11:59 PM\r\n04:12 PM\r\n5\r\n12:00 AM 11:59 PM\r\n01:00 PM 04:12 PM\r\n04:12 PM 04:12 PM\r\n04:12 AM 04:12 AM\r\n12:00 PM 11:59 PM","output":"1100\r\n11101","explanation":"**Example case 1:** \r\n- Friend $1$: `12:01 AM` lies between `12:00 AM` and `11:42 PM` (that is, between `00:00` and `23:42` in the 24-hour clock format), so this friend will be able to attend the meeting.\r\n- Friend $2$: `12:01 AM` lies between `12:01 AM` and `11:59 AM` (between `00:01` and `11:59` in the 24-hour clock format).\r\n- Friend $3$: `12:01 AM` does not lie between `12:30 AM` and `12:30 PM` (between `00:30` and `12:30` in the 24-hour clock format), so this friend will not be able to attend the meeting.\r\n- Friend $4$: `12:01 AM` does not lie between `11:59 AM` and `11:59 PM` (between `11:59` and `23:59` in the 24-hour clock format).\r\n\r\n**Example case 2:** For friend $3$, `04:12 PM` lies between `04:12 PM` and `04:12 PM` (inclusive) and hence this friend will be able to attend the meeting.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/-QVBgZCtXyM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"smit_adm","problem_tester":"","date_added":"9-01-2021","tags":{"0":"cakewalk","1":"feb21","2":"implementation","3":"smit_adm","4":"vichitr"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MEET","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MEET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/MEET.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/MEET.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/MEET.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/MEET.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/MEET.pdf) as well.

A *time* is a string in the format `"HH:MM AM"` or `"HH:MM PM"` (without quotes), where `HH` and `MM` are always two-digit numbers. A day starts at 12:00 AM and ends at 11:59 PM. You may refer [here](https://simple.wikipedia.org/wiki/12-hour_clock) for understanding the 12-hour clock format.

Chef has scheduled a meeting with his friends at a time $P$. He has $N$ friends (numbered $1$ through $N$); for each valid $i$, the $i$-th friend is available from a time $L_i$ to a time $R_i$ (both inclusive). For each friend, can you help Chef find out if this friend will be able to attend the meeting? More formally, check if $L_i \leq P \leq R_i$ for each valid $i$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single time $P$.
- The second line contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated times $L_i$ and $R_i$.

### Output
For each test case, print a single line containing one string with length $N$. For each valid $i$, the $i$-th character of this string should be '1' if $i$-th friend will be able to attend the meeting or '0' otherwise. 

### Constraints 
- $1 \leq T \leq 500$
- $1 \leq N \leq 500$
- each time is valid in the 12-hour clock format
- for each valid $i$, the time $R_i$ is greater or equal to $L_i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
12:01 AM
4
12:00 AM 11:42 PM
12:01 AM 11:59 AM
12:30 AM 12:00 PM
11:59 AM 11:59 PM
04:12 PM
5
12:00 AM 11:59 PM
01:00 PM 04:12 PM
04:12 PM 04:12 PM
04:12 AM 04:12 AM
12:00 PM 11:59 PM
```

### Example Output
```
1100
11101
```

### Explanation
**Example case 1:** 
- Friend $1$: `12:01 AM` lies between `12:00 AM` and `11:42 PM` (that is, between `00:00` and `23:42` in the 24-hour clock format), so this friend will be able to attend the meeting.
- Friend $2$: `12:01 AM` lies between `12:01 AM` and `11:59 AM` (between `00:01` and `11:59` in the 24-hour clock format).
- Friend $3$: `12:01 AM` does not lie between `12:30 AM` and `12:30 PM` (between `00:30` and `12:30` in the 24-hour clock format), so this friend will not be able to attend the meeting.
- Friend $4$: `12:01 AM` does not lie between `11:59 AM` and `11:59 PM` (between `11:59` and `23:59` in the 24-hour clock format).

**Example case 2:** For friend $3$, `04:12 PM` lies between `04:12 PM` and `04:12 PM` (inclusive) and hence this friend will be able to attend the meeting.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>