---
languages_supported:
    - NA
title: PHOTOS
category: NA
old_version: true
problem_code: PHOTOS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You are a freelance photographer and you are about to start the busiest day of your career! There are a number of events happening throughout the city and you want to take a picture of these events to publish in the local newspaper.

The problem is that the events only occur at specific times and it takes time to travel between locations. Because of this, you may not be able to make it to each event. So, your goal is to take photos at as many events as possible. Since you only need a single photo of an event to publish in the newspaper, you may assume it takes essentially no time to document an event.

Locations are points in the plane and will be given by their (x,y) coordinates. The city is laid out in a grid-like fashion so the time it takes to travel from one location (x,y) to another location (x',y') is |x-x'| + |y-y'| (the "Manhattan" distance). No two events will simultaneously occur at the same location, though it is possible that two events occur at the same location at different times of the day. Finally, you always start the day at the location (0,0).

### Input

The first line of the input contains the number of test cases (at most 30). Each test case begins with a single integer k on a single line indicating the number of events. The next k lines describe the events, one per line. The i'th such line contains three integers xi, yi, ti where (xi, yi) describes the location of the event and ti describes the time the event occurs. You always begin at location (0,0) at time 0.

Bounds: 1 ≤ k ≤ 1000 and for every event i we have |xi|, |yi| ≤ 1,000,000 and 1 ≤ ti ≤ 1,000,000.

### Output

For each input you are to output a single line. If you are unable to take photos at any event, then simply output "No Photos". Otherwise, output two integers separated by a single space. The first integer is the maximum number of photos you can take (let's call this M). Then the second integer you should output is the earliest possible time you can take the last of these M photos.

### Example

<pre>
<b>Input:</b>
5
3
1 2 3
2 3 5
3 2 6
3
0 1 1
0 -3 4
0 -4 5
4
0 1 1
0 4 4
0 -2 2
0 -3 3
1
3 4 6
2
5 5 15
-6 -6 12

<b>Output:</b>
2 5
2 5
2 3
No Photos
1 12


</pre>