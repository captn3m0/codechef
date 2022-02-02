---
{"category_name":"easy","problem_code":"AVLBLT","problem_name":"Availability","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dojiboy9","problem_tester":null,"date_added":"28-12-2018","tags":{"0":"dojiboy9"},"time":{"view_start_date":1546074900,"submit_start_date":1546074900,"visible_start_date":1546074900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are scheduling a phone call with a friend who lives in another timezone.

You are located in timezone $0$, and your friend is located in timezone $T$ $(0 \leq T < 24)$.

Your friend gives you a list of time-specifications, representing the times they are available in their timezone for each day every week. You would like to translate the times to your timezone, while maintaining the same format. In particular, you must output new time-specifications after subtracting $T$ hours from each time-specification and formatting appropriately.

###INPUT:

The first line of input contains a single integer $T$ $(0 \leq T < 24)$, the time-zone of your friend.

Exactly $7$ blocks of lines follow (one for each day of the week, in order, starting with Sundays).

Each block starts with a line containing a single integer $k_i$, the number of time-specifications for the $i^{th}$ day ($0 \leq k_i \leq 720$). Then $k_i$ lines follow, each containing the start-time and end-time of a time-specification for that day, separated by a space.

All times are of the form `hh:mm` (00 <= `hh` <= 23, 00 <= `mm` <= 59).


*Notes:*

 - The start-time for each time-specification is inclusive, whereas the end-time is _exclusive_. For example, a time-specification `09:15 09:16` starts exactly at 9:15am and is 1 minute long (ending just as 9:16am starts).

 - All time-specifications for a given day are disjoint, and sorted by start-time.

 - If two adjacent time-specification meet at a time, they are merged together i.e. if end time of first interval is equal to start time of second interval (on the same day), they will be merged together.

 - All time-specifications have strictly positive length (they contain at least one minute in them).

 - When `00:00` is used as a start-time, it corresponds to midnight at the beginning of the day, whereas when `00:00` is used as an end-time, it corresponds to just before midnight at the end of the day. In particular, a time-specification such as `00:00 00:00` starts at midnight at the beginning of the day, and is 24 hours long.

(See the sample inputs for clarifications.)

###OUTPUT:
Display the time-specifications after subtracting $T$ hours from all time-specifications.

You must display exactly 7 blocks of lines (one for each day of the week, in order, starting with Sundays), using the same format as the input.

###Sample Input 1
```
12
3
00:00 07:30
08:30 15:30
16:30 00:00
0
0
0
0
0
0
```

###Sample Output 1
```
2
00:00 03:30
04:30 12:00
0
0
0
0
0
2
12:00 19:30
20:30 00:00
```

###Explanation of Sample Input 1
Your friend is located in timezone `12`. They are available:
 - `[Sundays midnight to 7:30am]`
 - `[Sundays 8:30am to 3:30pm]`, and
 - `[Sundays 4:30pm to midnight]`.

To translate the time to your timezone, you must subtract `12` hours.

 - `[Sundays midnight to 7:30am]` becomes `[Saturdays noon to 7:30pm]`.
 - `[Sundays 8:30am to 3:30pm]` becomes `[Saturdays 8:30pm to Sundays 3:30am]`, and hence gets split into two separate intervals `[Saturdays 8:30pm to midnight]` and `[Sundays midnight to 3:30am]`.
 - `[Sundays 4:30pm to midnight]` becomes `[Sundays 4:30am to noon]`.


###Sample Input 2
```
12
2
00:00 03:30
04:30 12:00
0
0
0
0
0
2
12:00 19:30
20:30 00:00
```

###Sample Output 2
```
0
0
0
0
0
0
3
00:00 07:30
08:30 15:30
16:30 00:00
```

###Explanation of Sample Input 2
This is the _reverse_ of Sample Input 1, but a day earlier.

###Sample Input 3
```
6
0
0
0
1
00:00 00:00
0
1
08:12 08:13
0
```

###Sample Output 3
```
0
0
1
18:00 00:00
1
00:00 18:00
0
1
02:12 02:13
0
```
