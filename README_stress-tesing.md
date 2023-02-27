To create a load run script "load.sh"

---
Load for 1 minute

| Concurrency      | 10               | 25               | 50               | 100              | 200              | 250              | 500              | 1000             |
|------------------|------------------|------------------|------------------|------------------|------------------|------------------|------------------|------------------|
| Availability     | 100.00 %         | 99.95 %          | 100.00 %         | 100.00 %         | 100.00 %         | 99.99 %          | 100.00 %         | 93.93 %          |
| Response time    | 0.02 secs        | 0.03 secs        | 0.08 secs        | 0.17 secs        | 0.33 secs        | 0.42 secs        | 0.80 secs        | 1.72 secs        |
| Throughput       | 0.00 MB/sec      | 0.00 MB/sec      | 0.00 MB/sec      | 0.00 MB/sec      | 0.00 MB/sec      | 0.00 MB/sec      | 0.00 MB/sec      | 0.00 MB/sec      |
| Transaction rate | 520.76 trans/sec | 541.97 trans/sec | 539.17 trans/sec | 540.94 trans/sec | 546.74 trans/sec | 537.65 trans/sec | 556.58 trans/sec | 479.69 trans/sec |
