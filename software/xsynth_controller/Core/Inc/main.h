/* USER CODE BEGIN Header */
/**
  ******************************************************************************
  * @file           : main.h
  * @brief          : Header for main.c file.
  *                   This file contains the common defines of the application.
  ******************************************************************************
  * @attention
  *
  * Copyright (c) 2024 STMicroelectronics.
  * All rights reserved.
  *
  * This software is licensed under terms that can be found in the LICENSE file
  * in the root directory of this software component.
  * If no LICENSE file comes with this software, it is provided AS-IS.
  *
  ******************************************************************************
  */
/* USER CODE END Header */

/* Define to prevent recursive inclusion -------------------------------------*/
#ifndef __MAIN_H
#define __MAIN_H

#ifdef __cplusplus
extern "C" {
#endif

/* Includes ------------------------------------------------------------------*/
#include "stm32f4xx_hal.h"

/* Private includes ----------------------------------------------------------*/
/* USER CODE BEGIN Includes */

/* USER CODE END Includes */

/* Exported types ------------------------------------------------------------*/
/* USER CODE BEGIN ET */

/* USER CODE END ET */

/* Exported constants --------------------------------------------------------*/
/* USER CODE BEGIN EC */

/* USER CODE END EC */

/* Exported macro ------------------------------------------------------------*/
/* USER CODE BEGIN EM */

/* USER CODE END EM */

/* Exported functions prototypes ---------------------------------------------*/
void Error_Handler(void);

/* USER CODE BEGIN EFP */

/* USER CODE END EFP */

/* Private defines -----------------------------------------------------------*/
#define UART_2_MIDI_TX_Pin GPIO_PIN_2
#define UART_2_MIDI_TX_GPIO_Port GPIOA
#define UART_2_MIDI_RX_Pin GPIO_PIN_3
#define UART_2_MIDI_RX_GPIO_Port GPIOA
#define SPI1_CS0_Pin GPIO_PIN_4
#define SPI1_CS0_GPIO_Port GPIOC
#define SPI1_CS1_Pin GPIO_PIN_5
#define SPI1_CS1_GPIO_Port GPIOC
#define UART_6_DEBUG_TX_Pin GPIO_PIN_6
#define UART_6_DEBUG_TX_GPIO_Port GPIOC
#define UART_6_DEBUG_RX_Pin GPIO_PIN_7
#define UART_6_DEBUG_RX_GPIO_Port GPIOC
#define UART_1_SYNTH_TX_Pin GPIO_PIN_9
#define UART_1_SYNTH_TX_GPIO_Port GPIOA
#define UART_1_SYNTH_RX_Pin GPIO_PIN_10
#define UART_1_SYNTH_RX_GPIO_Port GPIOA
#define IO_EXPAND_INT_Pin GPIO_PIN_5
#define IO_EXPAND_INT_GPIO_Port GPIOB

/* USER CODE BEGIN Private defines */

/* USER CODE END Private defines */

#ifdef __cplusplus
}
#endif

#endif /* __MAIN_H */
